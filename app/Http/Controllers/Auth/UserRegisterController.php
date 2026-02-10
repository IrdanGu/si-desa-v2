<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register'); // Buat view ini nanti
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            // 'level' => 'required|admin,karangtaruna,user',

        ]);

        // Buat user dengan role "user"
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 'user',
        ]);

        return redirect()->route('login')->with('success', 'Account created successfully! Please log in.');
    }
}
