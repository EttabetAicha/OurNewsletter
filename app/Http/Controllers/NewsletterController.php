<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Newsletter;
use App\Models\User;
use Illuminate\Http\Request;
use PDO;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::all();
        $newsletters = Newsletter::all();
        return view('news', compact('newsletters', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'user_id' => 'required|exists:users,id',
            'images' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the image validation rules as needed
        ]);

        if ($request->hasFile('images')) {
            $imageName = $request->file('images')->getClientOriginalName();
            $request->file('images')->move(public_path('assets/images'), $imageName);
            $input['images'] =  $imageName;
        }

        Newsletter::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $request->user_id,
            'images' => $imageName,
        ]);

        return redirect('newsletter')
            ->with('success', 'Newsletter created successfully.');
    }

    public function update(Request $request, Newsletter $newsletter)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'user_id' => 'required|exists:users,id',
            'images' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $newsletter->title = $request->title;
        $newsletter->content = $request->content;
        $newsletter->user_id = $request->user_id;

        if ($request->hasFile('images')) {
            $imageName = $request->file('images')->getClientOriginalName();
            $request->file('images')->move(public_path('assets/images'), $imageName);
            $newsletter->images = $imageName;
        }

        $newsletter->save();

        return redirect('newsletter')->with('success', 'Newsletter updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Newsletter $newsletter)
    {
        if ($newsletter->image) {
            $imagePath = 'issets/images/' . $newsletter->image;
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }
        }
        $newsletter->delete();
        return redirect('newsletter')
            ->with('success', 'Newsletter deleted successfully.');
    }

    public function search(Request $request){
        $search_text = $request->input('query');
        $newsletters = Newsletter::where('title', 'LIKE', '%'.$search_text.'%')->get();
        $users = User::all(); 
        return view('search', compact('newsletters', 'users'));
    }
    
   
}

