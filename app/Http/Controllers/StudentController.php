<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function showInfor()
    {
        $data = [
            'id' => '1',
            'name' => 'Phạm Văn Tuân',
            'age' => '20',
            'address' => 'Lào Cai'
        ];

        return view('thongtin', compact('data'));
    }
}
