<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
   public function index(Request $request)
    {
        $email = $request->query('email');
        $token = $request->query('token');
        $timestamp = $request->query('timestamp');
        $name = $request->query('name');
        $lastName = $request->query('lastName');

        // if (!$email || !$token) {
        //     return redirect()->away('https://www.expressmama.com/UyeGiris');
        // }

        // $secret = env('EXTERNAL_SSO_SECRET', 'supersecretkey'); 
        // $expectedToken = hash('sha256', strtolower($email) . $timestamp . $secret);
        
        // if (!hash_equals($expectedToken, $token)) {
        //     return response()->json(['error' => 'Geçersiz token.'], 403);
        // }

        $user = User::where('email', $email)->first();

        if (!$user) {
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt(uniqid()), 
                'lastName' => $lastName,
            ]);
        }

        Auth::login($user);

        return redirect('/index');
    }
}
