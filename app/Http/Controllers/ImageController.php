<?php

namespace App\Http\Controllers;
use App\Models\Meme;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

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
            $memecreate = Meme::create($data);
            // $memes = Meme::All();
            return redirect()->route('meme', ['id' => $memecreate->id]);
            // return view('home', ['memes' => $memes]);
    }

    public function memeindivid($id) {
        $memei = Meme::find($id);
        return view('meme', ['memei' => $memei]);
    }

    public function editpost($id) {
        $memei = Meme::find($id);
        $memei = Meme::find($id);
        if (! Gate::allows('delete-edit-perm', $memei)) {
            abort(403);
        }
        return view('editpost', ['memei' => $memei]);
    }

    public function delpost($id) {
        $memei = Meme::find($id);
        if (! Gate::allows('delete-edit-perm', $memei)) {
            abort(403);
        }
        return view('delete', compact('memei'));
    }

    public function destroypost($id) {
        $memei = Meme::findOrFail($id);
        $memei = Meme::find($id);
        if (! Gate::allows('delete-edit-perm', $memei)) {
            abort(403);
        }
        $memei->delete();
        $memes = Meme::paginate(10);
        // return view('home', ['memes' => $memes]);
        return redirect()->route('home', ['memes' => $memes]);
    }
}
