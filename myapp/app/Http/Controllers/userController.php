<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //

    function displayUser($id) {
        // return "Hello this is from User Controller";
        // return view('welcome');\
        // return $id;

        return view('displayUser', 
        ["id" => $id, "name"=> "Fahad", 
        "hobbies"=>['Coding', 'Cricket', 
        'Singing', 'Reading'] ]);
    }
}
