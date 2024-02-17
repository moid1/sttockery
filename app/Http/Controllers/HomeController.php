<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Notes;
use App\Models\Order;
use App\Models\Upload;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user() && Auth::user()->type == 0) {
            $dataArray = [];
            $users = User::where('type', 1)->get();
            $dataArray['customersCount'] = $users->count();
            $dataArray['totalUploads'] = Upload::count();
            return view('home', compact('dataArray', 'users'));
        }

        $uploads = Upload::latest()->with(['likes'],['disLikes'])->get();
        $tags = $uploads->flatMap(function ($item) {
            return explode(',', $item->tags);
        })->map(function ($value) {
            return trim($value);
        })->unique()->values()->all();
        $tags = array_slice($tags, 0, 10);

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

    public function index2(){
        if (Auth::user() && Auth::user()->type == 0) {
            $dataArray = [];
            $users = User::where('type', 1)->get();
            $dataArray['customersCount'] = $users->count();
            $dataArray['totalUploads'] = Upload::count();
            return view('home', compact('dataArray', 'users'));
        }

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

    public function changePassword()
    {
        return view('change-password');
    }

    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }
}
