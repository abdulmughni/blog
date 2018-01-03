<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class AdminMediaController extends Controller
{
    //

    public function index() {

        $medias = Photo::orderBy('id', 'desc')->get();
        return view('admin.media.index', compact('medias'));
    }

    public function create() {

        return view('admin.media.create');
    }

    Public function store(Request $request) {
        $file = $request->file('file');

        $file_name = time() . $file->getClientOriginalName();

        $file->move('images', $file_name);

        Photo::create(['file'=>$file_name]);
    }

    public function destroy($id) {
        $file = Photo::findOrFail($id);

        unlink(public_path() . $file->file);

        $file->delete();

        return redirect('/admin/media');
    }
}
