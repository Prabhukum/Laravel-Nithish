<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Imports\UsersImport;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use DB;

class HomeController extends Controller
{
    public function view()
    {
        $countries=$this->getCountries();
        return view('registration',['countries'=>$countries]);
    }


    public function register(Request $request)
    {

        $email = DB::table('register')->where('email',$request->email)->get();

        if(count($email)>0){
            return redirect('registeration')->with('message','Email already registered');
        }
        else{
            $phone = DB::table('register')->where('phone',$request->phone)->get();

            if(count($phone)>0){
                return redirect('registeration')->with('message','phone already registered');
            }
            else{

                $emp_id = $request->input('emp_id');
                $username = $request->input('username');
                $email = $request->input('email');
                $password = $request->input('password');
                $phone = $request->input('phone');
                $address = $request->input('address');
                $course = $request->input('course');
                $cpassword = $request->input('cpassword');
                $designation = $request->input('designation');
                $exp = $request->input('exp');
                $gender = $request->input('radio');
                $status = $request->input('status');
                $country = $request->input('country');
                $state = $request->input('state');
                $city = $request->input('city');

                if($password == $cpassword)
                {
                    DB::insert("insert into register(emp_id,username,email,password,phone,address,course,designation,experience,gender,martial_status,country,state,city) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
                    [$emp_id,$username,$email,$password,$phone,$address,$course,$designation,$exp,$gender,$status,$country,$state,$city]);
                    return redirect('')->with('message','Registered Successfully! Please Login');
                }
                else{
                    return redirect('registeration')->with('message','Passwords are different');
                }

            }
        }
    }


    public function loginview()
    {

        return view('login');
    }
    public function login(Request $request)
    {
        $email = DB::table('register')
        ->where('email',$request->email)
        ->where('password',$request->password)
        ->get();
        // $password = DB::table('register')->where('password',$request->password)->get();

        if(count($email)>0){
            // if(count($password)>0){
                return redirect('detail')->with('message','Loggedin Successfully!');
            }
            else{
                return redirect('/')->with('message','Password and Email does not match');
            }
        // }
        // else{
        //     return redirect('/')->with('message','Email does not found');
        // }
    }


    public function import()
    {
        Excel::Import(new UsersImport, request()->file('file'));
        return redirect()->back();
    }
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }


    public function getCountries(){
        $countries = DB::table('countries')->get();

        return $countries;
    }
    public function getStates(Request $request){
        $states = DB::table('states')->where('country_id',$request->country_id)->get();

        if(count($states)>0){
            return response()->json($states);
        }
    }
    public function getCities(Request $request){
        $cities = DB::table('cities')->where('state_id',$request->state_id)->get();

        if(count($cities)>0){
            return response()->json($cities);
        }
    }


}
