<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class UserController extends Controller
{
    public function projects()
    {
        if (Auth::user()) {
            $projects = Auth::user()->projects()->get();
            return view('projects', [
                'projects' => $projects
            ]);
        }
        return view('errors/404');
    }
}
