<?php

namespace App\Imports;

use App\Models\Detail;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // return new Detail([
        //     'emp_id'=>$row[0],
        //     'name'=>$row[1],
        //     'email'=>$row[2],
        //     'mobile'=>$row[3],
        //     'password'=>$row[4],

        // ]);
        $count = NULL;

        $count = Detail::where('emp_id',$row[0])->first();

        if(isset($count)) {

            Detail::where('emp_id', $row[0])
                    ->update([
                        'name'=>$row[1],
                        'email'=>$row[2],
                        'mobile'=>$row[3],
                        'password'=>$row[4]

                    ]);
            return;
        }
        else {
            return new Detail([
                'emp_id'=>$row[0],
                'name'=>$row[1],
                'email'=>$row[2],
                'mobile'=>$row[3],
                'password'=>$row[4]

            ]);
        }

    }
}
