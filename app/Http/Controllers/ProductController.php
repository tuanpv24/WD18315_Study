<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //public, private, protected, default
    public function showProduct()
    {
        $data = [
            [
                'id' => '1',
                'name' => 'Iphone 6s'
            ],
            [
                'id' => '2',
                'name' => 'Iphone 8s plus'
            ],
            [
                'id' => '3',
                'name' => 'Iphone 15'
            ],
        ];
        // return view('list-product')->with([
        //     'listProduct' => $data
        // ]);
        return view('list-product', compact('data'));
    }

    public function getProduct($id, $name = '')
    {
        echo $id;
        echo $name;
    }

    public function updateProduct(Request $request)
    {
        echo $request->id;
        echo $request->name;
    }

    // public function show()
    // {
    //     return view('list-product');
    // }
}
