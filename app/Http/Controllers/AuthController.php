<?php

namespace App\Http\Controllers;


    use App\Http\Requests\RegisterRequest;
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {

        return view('auth.Register');
    }

    public function registerPost(RegisterRequest $request)
    {
        $register = new User();
        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = Hash::make($request->password);
        $register->save();
        return back()->with('success', 'vous êtes inscrit');
    }

    public function authenticateGet()
    {
        return view('Auth.Auth');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/livres');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}


