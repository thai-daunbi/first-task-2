<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::with('city')->find($id); // $id에 해당하는 모델 인스턴스를 조회합니다.

        if (!$user) {
            return response()->json(['message' => 'User not found.'], 404);
        }

        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
            'cityName' => $user->city->name,
            'Email' => $user->email,
        ]);
    }
}
