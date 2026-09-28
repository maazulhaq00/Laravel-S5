<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class appController extends Controller
{
    //

    function index(){

        $data = Student::all();

        return view("index", [ 'students' => $data ] );
    }

    function addUserForm(){
        return view("addUser");
    }

    function addUser(Request $request){

        Student::create($request->all());
        
        return redirect('/');
        
    }
}
