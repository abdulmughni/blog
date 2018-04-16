<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AdminMediaController extends Controller
{
    //

    public function index() {

        $medias = Photo::orderBy('id', 'desc')->paginate('10');
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
    }

    public function mediaDelete(Request $request)
    {



        if(isset($request->delete_single)){
            $photoId = array_search('Delete', $request->delete_single);
            $this->destroy($photoId);
            return redirect()->back();
        }

        if (isset($request->delete_all) && !empty($request->checkboxArray)) {
            $medias = Photo::findOrFail($request->checkboxArray);

            foreach ($medias as $media) {
                unlink(public_path() . $media->file);
                $media->delete();

            }
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}
