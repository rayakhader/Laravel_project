<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Nette\Schema\ValidationException;

class SessionControler extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes =$request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if(!Auth::attempt($attributes)){
            throw \Illuminate\Validation\ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        request()->session()->regenerate();

        return redirect('/jobs');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Auth::logout();
        return redirect('/');
    }
}
