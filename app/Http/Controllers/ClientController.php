<?php

namespace App\Http\Controllers;

use App\Client;
use App\ClientRegister;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class ClientController extends Controller
{
    public function index(){
        return view('admin.client.add-client');
    }

    public function saveClient(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);


           /*  $clientLogo = $request->file('logo');
            $logoName = $clientLogo->getClientOriginalName();
            $directory = 'logo/';
            $logoUrl = $directory.$logoName;
            Image::make($clientLogo)->save($logoUrl); */


        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->address = $request->address;
        $client->status = $request->status;
        $client->payment_status = $request->payment_status;
        if ($request->hasFile('logo')) {
            $file      = $request->file('logo');
            $fileName  = date('ymdhis').'.'.$file->getClientOriginalExtension();
            $path       = 'logo/';

            $file->move($path, $fileName);
            $fileUrl   = $path . $fileName;
            $client->logo= $fileUrl;
          }
        $client->add_client_url = $request->add_client_url;
        $client->show_on_home_page = $request->show_on_home_page;
        $client->flag = $request->flag;
        $client->save();

        return redirect('/client/add')->with('message', 'Client info save successfully');
    }

    public function manage(){
        $clients = Client::all();
        return view('admin.client.manage-client',[
            'clients'=>$clients

            ]);
    }

    public function editClient($id){
        $client = Client::find($id);
        return view('admin.client.edit-client', ['client'=>$client]);
    }

    public function updateClient(Request $request){
        $client = Client::find($request->client_id);
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->address = $request->address;
        $client->status = $request->status;
        $client->payment_status = $request->payment_status;
        if ($request->hasFile('logo')) {
            $file      = $request->file('logo');
            $fileName  = date('ymdhis').'.'.$file->getClientOriginalExtension();
            $path       = 'logo/';

            $file->move($path, $fileName);
            $fileUrl   = $path . $fileName;
            $client->logo= $fileUrl;
          }
        $client->add_client_url = $request->add_client_url;
        $client->show_on_home_page = $request->show_on_home_page;
        $client->flag = $request->flag;
        $client->save();

        return redirect('/client/manage')->with('message', 'Client info update successfully');
    }

    public function showClient($id){
        $client = Client::find($id);
        return view('admin.client.show-client', ['client'=>$client]);
    }

    public function deleteClient($id){
        $client = Client::find($id);
        $client->delete();

        return redirect('/client/manage')->with('message', 'Client info delete successfully');
    }

    public function clientRegistation(){
        return view('front-end.client-registation.client-registation');
    }

   /*  public function saveClientRegistation(Request $request){
        $client = Client::find($request->client_registation_id);
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->address = $request->address;
        $client->flag = $request->flag;
        $client->save();

        return redirect('/client-registation')->with('message', 'Account create successfully');
    } */
}
