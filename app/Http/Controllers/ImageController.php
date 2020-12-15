<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    function upload() { return view('upload'); }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'general' => 'required',
                'privacy' => 'required',
                'meme' => 'required',
            ]
            );
        if($file = $request->file('meme')) {
            $request->meme->store('memes');
            $post = new ImageController();
            $post->store();
            return view('home');
        }
        return redirect()->back();
    }
}
