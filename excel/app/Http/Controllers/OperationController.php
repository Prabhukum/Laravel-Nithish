<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use DB;
use PDF;

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

        $imageName1 = $emp_id.'.'.$request->image->extension();
        $imageName = "images/".$imageName1;
        $request->image->move(public_path('images'),$imageName1);


        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $mobile = $request->input('mobile');

        DB::insert("insert into details(emp_id,name,email,mobile,password,image) values(?,?,?,?,?,?)",
        [$emp_id,$name,$email,$mobile,$password,$imageName]);

        return redirect()->back()->with('status','User Detail Added Successfully');
    }

    public function editdetail($id)
    {
        $detail = Detail::find($id);

        return response()->json([
            'status'=>200,
            'detail'=>$detail,
        ]);
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
            if(File::exists(public_path($details[0]->image)))
            {
                File::delete(public_path($details[0]->image));

            }
            $imageName1 = $emp_id.'.'.$request->new_image->extension();
            $imageName = "images/".$imageName1;
            $request->new_image->move(public_path('images'),$imageName1);
        }else{
            $imageName = $details[0]->image;
        }

        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        DB::update('update details set emp_id=?,name=?,email=?,mobile=?,image=? where id=?',[$emp_id,$name,$email,$mobile,$imageName,$id]);
        return redirect()->back()->with('status','User Detail Updated Successfully');
    }

    public function deletedetail($id)
    {
        $details = DB::select('select * from details where id = ?', [$id]);
        if($details[0]->image != "default.png") {
            if(File::exists(public_path($details[0]->image)))
            {
                File::delete(public_path($details[0]->image));

            }
        }
        DB::delete('delete from details where id = ?', [$id]);
        echo 200;
        // return redirect()->back();

    }

    // Pdf function

    public function export_user_pdf($id)
    {
        $details = DB::select('select * from details where id = ?', [$id]);

        $pdf = Pdf::loadView('pdf.users',[
            'details'=>$details
        ]);
        return $pdf->download('users.pdf');
    }
    public function view_user_pdf($id)
    {
        $details = DB::select('select * from details where id = ?', [$id]);

        $pdf = Pdf::loadView('pdf.users',[
            'details'=>$details
        ]);
        return $pdf->stream();
    }

    // end Pdf function


}
