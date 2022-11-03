<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\AuthRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Advert;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(){
        $add_blocks = Advert::all('block');
        $advert_engine = json_decode($add_blocks,true);
        return view('frontend.user.login', compact('advert_engine'));
    }

    public function register(){
        $add_blocks = Advert::all('block');
        $advert_engine = json_decode($add_blocks,true);
        return view('frontend.user.register', compact('advert_engine'));
    }
    public  function logout(){
        Auth::logout();
       return redirect()->route('index');
    }
    public function store(RegisterRequest $request){
      $user_registration = User::create([
          'name'=>$request->name,
          'email'=>$request->email,
          'password'=>Hash::make($request->password)
      ]);
      session()->flash('success','Вы успешно зарегистрировались');
      Auth::login($user_registration);
      return redirect(route('login'));
    }
    public function auth(AuthRequest $request)
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->route('index');
        } else {
            return redirect()->back()->with('error','Произошла ошибка при входе');
        }
    }
}
