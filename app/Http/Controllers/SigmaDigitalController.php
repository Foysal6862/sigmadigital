<?php

namespace App\Http\Controllers;

use App\Inquiry;
use Illuminate\Http\Request;
use App\Client;
use Illuminate\Support\Facades\Mail;
use App\Mail\InquiryToAdmin;

class SigmaDigitalController extends Controller
{
    public function index(){
        $clients = Client::where('show_on_home_page', 1)->get();
        return view('front-end.home.home', ['clients'=>$clients]);
    }

    public function contact(){
        return view('front-end.contact.contact');
    }

    public function submitFrontInquiry(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);

        $inquiry = new Inquiry();
        $inquiry->name = $request->name;
        $inquiry->email = $request->email;
        $inquiry->subject = $request->subject;
        $inquiry->message = $request->message;
        $inquiry->save();

        /* $inquiry_to_admin = InquiryToAdmin::find($id);
        $inquiry->inquiry_to_admins()->attach($inquiry_to_admin); */

        Mail::to('support@sigmadigital.xyz')->send(new InquiryToAdmin($inquiry));
        return redirect('/contact')->with('message', 'Message send successfully');
    }

    public function about(){
        return view('front-end.about.about');
    }

    public function privacyPolicy(){
        return view('front-end.privacy-policy.privacy-policy');
    }

    public function cmsManagement(){
        return view('front-end.services.cms-management');
    }

    public function eCommerceManagement(){
        return view('front-end.services.e-commerce');
    }

    public function emailMarketing(){
        return view('front-end.services.email-marketing');
    }

    public function marketingAutomation(){
        return view('front-end.services.marketing-automation');
    }

    public function virtualAssistance(){
        return view('front-end.services.virtual-assistance');
    }

    public function onlineReputationManagement(){
        return view('front-end.services.online-reputation-management');
    }

    public function searchEngineOptimization(){
        return view('front-end.services.search-engine-optimization');
    }

    public function socialMediaMarketing(){
        return view('front-end.services.social-media-marketing');
    }

    public function crmMarketing(){
        return view('front-end.services.crm-marketing');
    }

    public function ourPackages(){
        return view('front-end.our-packages.our-packages');
    }
}
