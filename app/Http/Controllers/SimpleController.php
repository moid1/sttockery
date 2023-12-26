<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function search(Request $request){
        $query = $request->input('query');

        $uploads = Upload::latest()->get();

        $tags = $uploads->flatMap(function ($item) {
            return explode(',', $item->tags);
        })->map(function ($value) {
            return trim($value);
        })->unique()->values()->all();

        // $desiredTags = ['tag1', 'tag2', 'tag3']; // Replace with your desired tags
        // $filteredCollection = $uploads->filter(function ($item) use ($desiredTags) {
        //     $tags = explode(',', $item->tags);
        //     $tags = array_map('trim', $tags); // Trim spaces from each tag

        //     // Check if any of the desired tags is present in the item's tags
        //     return collect($desiredTags)->contains(function ($tag) use ($tags) {
        //         return collect($tags)->contains(function ($itemTag) use ($tag) {
        //             return str_contains($itemTag, $tag);
        //         });
        //     });
        // });

        return view('website.home', compact('uploads','tags'));

    }
}
