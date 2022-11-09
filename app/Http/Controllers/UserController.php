<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Rules\Password;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => 'required', 'string', new Password, 'confirmed',
            'image' => ['required', 'image'],
            'role' => ['required', 'string']
        ]);

        $validated['image'] = $request->file('image')?->store('user');

        User::create($validated);
        return redirect()->back()->with('success', "berhasil menambah " . $validated['role'] . " baru");
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => ['email', 'required', 'string'],
            'password' => ['required', 'string']
        ]);

        if (auth()->attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            return redirect('/home');
        }

        return redirect()->back()->with("error", "email atau password salah");
    }

}
