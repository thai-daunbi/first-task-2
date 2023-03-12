<?php

namespace App\Http\Controllers;
echo "web.php"; exit;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUser($id)
    {
        if ($id == 1) {
            return response()->json([
                'id' => 1,
                'name' => 'leo',
                'cityName' => 'seoul',
                'Email' => 'leo@mail.com',
            ]);
        } else {
            return response()->json(['message' => 'User not found.'], 404);
        }
    }
}
