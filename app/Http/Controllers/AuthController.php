<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:web')->except('do_logout');
    }
    public function index()
    {
        $roles = Role::all();
        return view('pages.auth.main', ['roles' => $roles]);
    }
    public function do_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:255',
            'password' => 'required|min:8',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('username')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('username'),
                ]);
            }else{
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('password'),
                ]);
            }
        }
        $user = User::where('username', $request->username)->first();
        if ($user){
            if(Auth::guard('web')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember))
            {
                return response()->json([
                    'alert' => 'success',
                    'message' => 'Welcome back '. Auth::guard('web')->user()->name,
                    'callback' => 'reload',
                ]);
            } else  {
                return response()->json([
                    'alert' => 'error',
                    'message' => 'Maaf, password anda salah, silahkan coba lagi.',
                ]);
            }
        } else {
            return response()->json([
                'alert' => 'error',
                'message' => 'Maaf, username tidak terdaftar, silahkan coba lagi.',
            ]);
    } 
        
    }
    public function do_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users',
            'name' => 'required|unique:users',
            'email' => 'required|email|max:255',
            'password' => 'required|min:8',
            'role_id' => 'required'
        ]);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('username')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('username'),
                ]);
            }elseif ($errors->has('name')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('name'),
                ]);
            }elseif ($errors->has('email')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('email'),
                ]);
            }elseif ($errors->has('password')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('password'),
                ]);
            }
        }

        $user = new User;
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;
        $user->status = 'PENDING';
        $user->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Registrasi Berhasil',
            'callback' => 'reload',
        ]);
    }
    public function do_logout()
    {
        $user = Auth::guard('web')->user();
        Auth::logout($user);
        return redirect('auth');
    }
}
