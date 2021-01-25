<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
 public function login(Request $req){
    $email = $req->email;
    $pwd   = $req->password;
    if (Auth::attempt(['email' => $email, 'password' => $pwd])) {
        return "Selamat Datang ". Auth::user()->name;
    }else{
        return "Maaf email atau password yang anda masukan tidak sesuai.";
    }

}
}
