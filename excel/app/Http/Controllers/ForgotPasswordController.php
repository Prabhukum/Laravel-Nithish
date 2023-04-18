<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use DB;


class ForgotPasswordController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('auth.forgotPassword');
    }

    public function submitForgotPasswordForm(Request $request)
    {
        $request->validate([
            'email'=>'required|email|exists:register'
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email'=>$request->input('email'),
            'token'=>$token,
            'created_at'=>Carbon::now()
        ]);

        Mail::send('email.forgotPassword',['token'=>$token],function($message) use($request){
            $message->to($request->input('email'));
            $message->subject('Reset Password');
        });
        return back()->with('message','we have emailed you reset password link');
    }

    public function showResetPasswordForm($token)
    {
       return view('auth.forgotPasswordLink',['token'=>$token]);
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email'=>'required|email|exists:register',
            'password'=>'required|min:6|confirmed',
            'password_confirmation'=>'required'
        ]);

        $password_reset_request = DB::table('password_resets')
        ->where('email',$request->input('email'))
        ->where('token',$request->token)
        ->first();

        if(!$password_reset_request){
            return back()->with('error','Invalid Token');
        }

        DB::update('update register set password=? where email=?',[$request->input('password'),$request->input('email')]);

        DB::table('password_resets')
        ->where('email',$request->input('email'))
        ->delete();

        return redirect('/')->with('message','Your password has been changed');
    }
}
