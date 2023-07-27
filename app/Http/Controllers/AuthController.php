<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login()
    {
        return view('form.login');
    }
    public function register()
    {
        return view('form.register');
    }

    public function register_post(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'username' => 'required|unique:users',
        'email' => 'required|email:dns|unique:users',
        'password' => 'required|min:5'
        ]);
        
        $data = $request->all();
        $check = $this->create($data);

        return redirect("login");
    }

    public function create(array $data) {
        return User::create([
        'name' => $data['name'],
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
        ]);
    }



}
