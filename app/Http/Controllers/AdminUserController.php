<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminEditRequest;
use App\Http\Requests\AdminUserRequest;
use App\Photo;
use App\User;
use App\Role;
use Intervention\Image\Facades\Image;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::orderBy('id', 'desc')->paginate('10');
        $count = 0;
        return view('admin.user.index', compact('users', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(AdminUserRequest $request)
    {
        //
        $user_input = $request->all();
        if ($file = $request->file('photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $path = public_path('images/' . $name);
            Image::make($file->getRealPath())->fit(500)->save($path);
            $photo = Photo::create(['file'=>$name]);
            $user_input['photo_id'] = $photo->id;
        }
        $user_input['password'] = bcrypt($request->password);

        User::create($user_input);

        $request->session()->flash('user_created', 'User has been created');

       return redirect('/admin/user');
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

        return view('admin.user.show');
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
        $user = User::findOrfail($id);
        $roles = Role::pluck('name','id')->all();
        return view('admin.user.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminEditRequest $request, $id)
    {
        //

        $user = User::findOrFail($id);
        $input = $request->all();

        if ($file = $request->file('photo_id')) {
            $file_name = time() . $file->getClientOriginalName();
            $path = public_path('images/' . $file_name);
            Image::make($file->getRealPath())->fit(500)->save($path);
            $file_update = Photo::create(['file'=>$file_name]);
            $input['photo_id'] = $file_update->id;
        }
        $input['password'] = bcrypt($request->password);
        $user->update($input);

        $request->session()->flash('user_updated', 'User has been updated');

        return redirect()->route('user.edit', $id);
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

        $user = User::findOrFail($id);

        if ($user->photo_id !== Null) {
            unlink(public_path() . $user->photo->file);
            $user_photo = $user->photo_id;
            Photo::findOrFail($user_photo)->delete();
        }
        $user->delete();
        session()->flash('user_delete', 'User has been deleted');

        return redirect('/admin/user');
    }
}
