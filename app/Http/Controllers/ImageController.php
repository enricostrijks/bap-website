<?php

namespace App\Http\Controllers;
use App\Models\Meme;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    function upload() { return view('upload'); }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'general' => 'required',
                'privacy' => 'required',
                'user_id' => 'required',
                'meme' => 'required|image',
            ]
            );
            $newFilename = $data['meme']->store('memes', 'public');
            $data['meme'] = $newFilename;
            Meme::create($data);
            $memes = DB::table('memes')->get();
            return view('home', ['memes' => $memes]);
    }
}
