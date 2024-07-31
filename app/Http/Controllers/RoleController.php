<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Notsoweb\LaravelMongoDB\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $user = User::first();

        return dd($user->hasRole(['administrator', 'pato']));
    }
}
