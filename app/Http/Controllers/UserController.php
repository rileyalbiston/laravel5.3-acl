<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	$users = User::all();
        return "Hello user or admin!";
    }
}
