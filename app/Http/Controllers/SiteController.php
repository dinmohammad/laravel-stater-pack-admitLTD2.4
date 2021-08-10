<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('home');
    }
    public function createStudentPage(){
        return view('addstudent');
    }
    public function studentDataHandler(Request $request){
        $rules = [
            'fullName' => 'required|min:5',
            'mail' => 'required|email',
        ];
        $this->validate($request, $rules);
        return $request->all();
    }









    // public function contact(){
    //     return view('contact');
    // }

    // public function header(){
    //     return view('layouts/header');
    // }

    // public function contactHandler(Request $request){
    //     $std_name =  $request->input('fullName');
    //     return $std_name;
    // }

}
