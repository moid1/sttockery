<?php

namespace App\Http\Controllers;

use App\Models\Dislike;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($id)
    {
       

    }

    /**
     * Display the specified resource.
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Like $like)
    {
        //
    }

    public function likePost($id)
    {
        $isExists = Like::where([['upload_id', $id], ['user_id', Auth::id()]])->exists();
        if (!$isExists) {
            Like::create([
                'user_id' => Auth::id(),
                'upload_id' => $id
            ]);
        }

        return back();
    }

    public function dislikePost($id){
        $isExists = Dislike::where([['upload_id', $id], ['user_id', Auth::id()]])->exists();
        if ($isExists) {
            Dislike::where([['upload_id', $id], ['user_id', Auth::id()]])->delete();
        }else{
            Dislike::create([
                'user_id' => Auth::id(),
                'upload_id' => $id
            ]);
        }

        return back();
    }
}
