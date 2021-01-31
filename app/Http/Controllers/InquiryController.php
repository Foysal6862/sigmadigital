<?php

namespace App\Http\Controllers;

use App\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InquiryController extends Controller
{

    public function index(){
        $records = Inquiry::all();
        return view('admin.inquiry.index',compact('records'));
    }
    public function show($id){
        $inquiry = Inquiry::find($id);
        return view('admin.inquiry.show',compact('inquiry'));
    }
}
/* ['inquiry_to_admins'=>$inquiry_to_admins] */
