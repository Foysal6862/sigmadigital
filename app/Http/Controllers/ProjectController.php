<?php

namespace App\Http\Controllers;

use App\Client;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index(){
        $clients = Client::where('show_on_home_page', 1)->get();
        return view('admin.project.add-project',[
            'clients'=>$clients

            ]);
    }

    public function saveProject(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'project_budget' => 'required'
        ]);

        $projects = new Project();
        $projects->client_id = $request->client_id;
        $projects->name = $request->name;
        $projects->project_budget = $request->project_budget;
        $projects->payment_status = $request->payment_status;
        $projects->project_status = $request->project_status;
        $projects->starting_date = $request->starting_date;
        $projects->ending_date = $request->ending_date;
        $projects->note = $request->note;
        if ($request->hasFile('logo')) {
            $file      = $request->file('logo');
            $fileName  = date('ymdhis').'.'.$file->getClientOriginalExtension();
            $path       = 'logo/';

            $file->move($path, $fileName);
            $fileUrl   = $path . $fileName;
            $projects->logo= $fileUrl;
          }
          $projects->save();
          return redirect('/project/add')->with('message', 'Project info save successfully');
    }

    public function manageProject(){
        $projects = Project::get();
        return view('admin.project.manage-project', [
            'projects'=>$projects
            ]);
    }

    public function editProject($id){
        $clients = Client::where('show_on_home_page', 1)->get();
        $project = Project::find($id);
        return view('admin.project.edit-project',[
            'project'=>$project,
            'clients'=>$clients

            ]);
    }

    public function updateProject(Request $request){
        $projects = Project::find($request->project_id);
        $projects->client_id = $request->client_id;
        $projects->name = $request->name;
        $projects->project_budget = $request->project_budget;
        $projects->payment_status = $request->payment_status;
        $projects->project_status = $request->project_status;
        $projects->starting_date = $request->starting_date;
        $projects->ending_date = $request->ending_date;
        $projects->note = $request->note;
        if ($request->hasFile('logo')) {
            $file      = $request->file('logo');
            $fileName  = date('ymdhis').'.'.$file->getClientOriginalExtension();
            $path       = 'logo/';

            $file->move($path, $fileName);
            $fileUrl   = $path . $fileName;
            $projects->logo= $fileUrl;
          }
          $projects->save();

          return redirect('/project/manage')->with('message', 'Project info update successfully');
    }

    public function showProject($id){
        $project = Project::find($id);
        return view('admin.project.show-project', ['project'=>$project]);
    }

    public function deleteProject($id){
        $project = Project::find($id);
        $project->delete();

        return redirect('/project/manage')->with('message', 'Project delete successfully');
    }
}
