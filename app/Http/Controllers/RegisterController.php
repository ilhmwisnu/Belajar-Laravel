<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;

class RegisterController extends Controller
{
    public function index()
    {
        return view("register.index", [
            "title" => "Register",
        ]);
    }

    public function store(Request $request) {

        $data =  $request->validate([
            "username" => "required|unique:users",
            "email" => "required|unique:users|email:dns",
            "password" => "required|min:8"
        ]);

        $data["password"] = Hash::make($data["password"]);

        User::create($data);

        // session()->flash('status', 'Berhasil melakukan registrasi');

        return redirect("/login")->with("status", 'Berhasil melakukan registrasi' );
    }
}
