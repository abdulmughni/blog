<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreatePostRequest;
use App\Photo;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        $count = 0;
        return view('admin.posts.index', compact('posts', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::pluck('name', 'id')->all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        //
        $inputs = $request->all();
        $user = Auth::user();

        if ($file = $request->file('photo_id')) {
            $file_name = time() . $file->getClientOriginalName();
            $file->move('images',$file_name);
            $photo = Photo::create(['file'=>$file_name]);
            $inputs['photo_id'] = $photo->id;
        }

        $user->posts()->create($inputs);

        $request->session()->flash('post_created', 'Post has been Created');

        return redirect('/admin/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $posts = Post::findOrFail($id);
        $categories = Category::pluck('name','id')->all();
        return view('admin.posts.edit', compact('posts','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = Post::findOrFail($id);
        $inputs = $request->all();

        if ($file_update = $request->file('photo_id')) {
            $file_name = time() . $file_update->getClientOriginalName();
            $file_update->move('images', $file_name);
            $file_create = Photo::create(['file'=>$file_name]);
            $inputs['photo_id'] = $file_create->id;
        }

        $post->update($inputs);

        $request->session()->flash('post_updated', 'Post has been updated');

        return redirect()->route('post.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post_delete = Post::findOrFail($id);
        if ($post_delete->photo_id !== NULL) {
            unlink(public_path() . $post_delete->photo->file);
            Photo::findOrFail($post_delete->photo_id)->delete();
        }

        $post_delete->delete();

        session()->flash('post_deleted', 'Post has been deleted');
        return redirect('admin/post');
    }

    public function post($slug) {

        $posts = Post::where('slug', $slug)->first();
        $comments = $posts->comment()->whereIsActive(1)->orderBy('id', 'desc')->get();
        return view('frontview.home-blog', compact('posts', 'comments'));
    }
}