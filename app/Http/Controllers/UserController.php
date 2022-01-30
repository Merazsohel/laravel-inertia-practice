<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $attributes = Request::validate([
            'name'       => 'required',
            'email'      => ['required','email'],
            'password'   => 'required'
        ]);

        User::create($attributes);

        return redirect('/users');
    }
}
