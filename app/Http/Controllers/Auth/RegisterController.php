<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class RegisterController extends Controller
{

    private $user = null;

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->user = new User();
        $this->middleware('guest');
    }


    public function index() {
        return view('auth.register');
    }

    public function createAccount(RegisterRequest $request) {
        $data = $request->except('_token');
        try
        {
            $this->user::create([
                'name' => $data['name'],
                'lastname' => $data['lastname'],
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),

            ]);
        } catch (Exception $e) {
            Log::info($e->getMessage());
        }
        return redirect()->route('auth.login')->with('success', 'Вие се регистрирахте успешно.');
    }
}
