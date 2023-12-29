<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;


class LoginController extends Controller
{
    public function showHome(Request $request){
        $request = $request->all();
        $username = $request["uname"];
        $password = $request["password"];
        // \\dd($username, $password);
        if($username == "user1" && $password == "user"){
            return view('home');
        }else{
            return redirect('/kesh.com')->with('status', 'Wrong Password or Username');
        }
    }
    public function index(Request $request){
        $request = $request->all();
        // dd($request);
        return view('login');
    }
    
}
