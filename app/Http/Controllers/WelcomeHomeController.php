<?php

namespace App\Http\Controllers;

use App\Post;
use App\Role;

class WelcomeHomeController extends Controller
{

    protected $fillable = [
        'role_id', 'status', 'photo_id', 'name', 'email', 'password'
    ];

    public function index() {
        $posts = Post::orderBy('id', 'desc')->get();
        $candidate = Role::whereName('Candidate')->first();
        $employer = Role::whereName('Employer')->first();
        $i = 0;
        return view('welcome', compact('posts', 'i', 'candidate', 'employer'));
    }
}