<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AdminMediaController extends Controller
{
    //

    public function index() {

        $medias = Photo::orderBy('id', 'desc')->get();
        $count = 0;
        return view('admin.media.index', compact('medias', 'count'));
    }

    public function create() {

        return view('admin.media.create');
    }

    Public function store(Request $request) {
        $file = $request->file('file');

        $file_name = time() . $file->getClientOriginalName();
        $path = public_path('images/' . $file_name);
        Image::make($file->getRealPath())->fit(600, 500)->save($path);

        Photo::create(['file'=>$file_name]);
    }

    public function destroy($id) {
        $file = Photo::findOrFail($id);

        unlink(public_path() . $file->file);

        $file->delete();

        return redirect('/admin/media');
    }
}
