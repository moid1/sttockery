<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::where('active', 1)->get();
        return view('website.uploads.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageUrl = 'website/user_uploads/' . time() . '.' . $request->upload_file->extension();
        $request->upload_file->move(public_path('website/user_uploads/'), $imageUrl);

        $uploads = Upload::create([
            'user_id' => Auth::id(),
            'file_path' => $imageUrl,
            'tags' => $request->tags,
            'title' => $request->title,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
            'format_type' => $request->format_type
        ]);
return redirect('/account');
        return back()->with('success', 'Uploding successfull');
    }

    /**
     * Display the specified resource.
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Upload $upload)
    {
        //
    }

    public function getAccountUploads(){
        $uploads = Upload::where('user_id', Auth::id())->get();
        return view('website.account.index', compact('uploads'));
    }
}
