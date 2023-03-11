<?php

namespace App\Http\Controllers;
echo "controller"; exit;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUser($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }
}
