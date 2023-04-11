<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use DB;

class OperationController extends Controller
{

    public function viewdetail(){
        $details = DB::select("select * from details");

        return view('details',['details'=>$details]);
    }
    public function adddetail(Request $request)
    {
        $emp_id = $request->input('emp_id');

        $request->validate([
            'image'=>'required|image|mimes:jpeg,jpg,png,svg|max:2048'
        ]);

        $imageName = $emp_id.'.'.$request->image->extension();

        $request->image->move(public_path('images'),$imageName);


        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $mobile = $request->input('mobile');

        DB::insert("insert into details(emp_id,name,email,mobile,password,image) values(?,?,?,?,?,?)",
        [$emp_id,$name,$email,$mobile,$password,$imageName]);

        return redirect()->back()->with('status','Details Added Successfully');
    }

    public function editdetail($id)
    {
        $details = DB::select('select * from details where id = ?', [$id]);
        return view('details',['status'=>200,'details'=>$details]);
    }

    public function updatedetail(Request $request)
    {
        $id = $request->input('stud_id');
        $details = DB::select('select * from details where id = ?', [$id]);

        $emp_id = $request->input('emp_id');
        if($request->new_image!='')
        {
            $request->validate([
                'new_image'=>'required|image|mimes:jpeg,jpg,png,svg|max:2048'
            ]);
            if(File::exists(public_path('images/'.$details[0]->image)))
            {
                File::delete(public_path('images/'.$details[0]->image));

            }else{
                return "File not found";
            }
            $imageName = $emp_id.'.'.$request->new_image->extension();

            $request->new_image->move(public_path('images'),$imageName);
        }else{
            $imageName = $details[0]->image;
        }

        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        DB::update('update details set emp_id=?,name=?,email=?,mobile=?,image=? where id=?',[$emp_id,$name,$email,$mobile,$imageName,$id]);
        return redirect()->back()->with('status','Details Updated Successfully');
    }

    public function deletedetail($id)
    {
        $details = DB::select('select * from details where id = ?', [$id]);
        if($details[0]->image != "default.png") {
            if(File::exists(public_path('images/'.$details[0]->image)))
            {
                File::delete(public_path('images/'.$details[0]->image));

            }
        }
        DB::delete('delete from details where id = ?', [$id]);
        echo 200;
        // return redirect()->back();

    }
}
