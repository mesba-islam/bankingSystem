<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function index(){
        return view("login");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
            'account_type' => 'string|nullable',
            'balance' => 'numeric|nullable',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'account_type' => $validatedData['account_type'],
            'balance' => $validatedData['balance'] ?? 0.00,
        ]);

        return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('AuthToken')->plainTextToken;

            return redirect('/account')->with('success', 'You have login successfully!');
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    public function account()
    {
        $users = User::first();
        // dd($users);
        return view('account', [
            'users' => $users
        ]);
    }
}
