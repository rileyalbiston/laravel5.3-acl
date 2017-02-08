<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	$role = Role::find('admin');
        return "Hello admin!";
    }
}
