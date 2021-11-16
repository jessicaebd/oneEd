<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function success()
    {
        return view('register.success', [
            'title' => 'Success'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:7|max:20'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        dd('success');
        // User::create($validated);

        // $request->session()->flash('success', 'Registrasi berhasil!');

        // return redirect('/login');
    }
}
