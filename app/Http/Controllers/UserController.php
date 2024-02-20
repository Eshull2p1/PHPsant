<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // ตรวจสอบข้อมูลที่ส่งมา Login : email, password, device_name 
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);
        // ค้นหา user ในฐานข้อมูล 
        $user = User::where('email', $request->email)->first();
        // ตรวจสอบ ถ้าไม่มี user ให้แจ้ง 
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        // สร้าง Token และเก็บไว้ในฐานข้อมูลและเข้ารหัส Hash Token  
        return $user->createToken($request->device_name)->plainTextToken;
    }
    public function destroy(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logged out successfully']);
    }
}
