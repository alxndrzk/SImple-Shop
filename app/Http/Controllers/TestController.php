<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    // public function index(request $request)
    // {
    //     // $users = User::get();
    //     // //dd($users); //untuk mematikan komen atau code dibawah belum ekseskusi biar mengecek data atasnya 
    //     // return view('Test', compact('users'));

    //     // $users = User::wheredate('created_at', '2023-03-16') ->get();  
    //     // return view ('Test', compact('users')); 
    // }

    public function index(request $request)
    {
        $users = User::wheredate('created_at', '2023-03-16') ->get();  
        return view ('Test', compact('users')); 
    }

    
}
