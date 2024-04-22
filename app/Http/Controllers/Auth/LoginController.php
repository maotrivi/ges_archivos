<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
      
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function register(Request $request){

        

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        

        $user->save();

        return to_route('login')->with('status','Se registró bien. La buena');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
           'email'=> ['required','string','email'],
            'password'=> ['required','string']
        ]);

        if(!Auth::attempt($credentials,$request->boolean('remember'))){
            throw ValidationException::withMessages([
                'email'=> __('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('secretaria.index')->with('status','Iniciaste sesión correctamente.');
    }

    public function logout(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login')->with('status','Ha cerrado sesión correctamente.');
   }

}
