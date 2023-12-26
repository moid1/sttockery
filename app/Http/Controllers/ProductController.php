<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail($id){
        $upload = Upload::find($id);
        return view('website/cart_details', compact('upload'));
    }
}
