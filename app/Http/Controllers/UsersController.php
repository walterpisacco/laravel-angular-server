<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $usuarios = User::get();
        return response()->json($usuarios, 200);
    }
}
