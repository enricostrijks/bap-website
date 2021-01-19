<?php

namespace App\Http\Controllers;
use App\Models\Meme;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UpdateMemeController extends Controller
{
    function update(Request $req) {
        $rules = [
            'title' => 'required',
            'description' => 'required',
        ];
        if ($req->hasFile('meme')) {
            $rules ['meme'] = 'required|image';
        }
        $data = $req->validate($rules);
        
        $data = Meme::find($req->id);
        $data->title=$req->title;
        $data->description=$req->description;
        if ($req->hasFile('meme')) {
            $data->meme=$req->meme;
            $newFilename = $data->meme->store('memes', 'public');
            $data->meme = $newFilename;
        }
        $data->save();
        $memes = Meme::paginate(10);
        return redirect()->route('home', ['memes' => $memes]);
    }
}
