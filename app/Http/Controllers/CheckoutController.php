<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function create($id){
        $upload = Upload::find($id);
        return view('website/checkout', compact('upload'));
    }
}
