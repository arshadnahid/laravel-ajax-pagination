<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(Request $request): View
    {
        $post = Post::paginate(3);

        if ($request->ajax()) {
            return view('data', compact('post'));
        }
        return view('posts', compact('post'));
    }

    public function paginate2(Request $request): View
    {
        $data['post'] = Post::paginate(3);
        $data['user'] = User::paginate(3);
        return view('pagination_parent', $data);
    }

    function fetch(Request $request)
    {
        if ($request->ajax()) {
            $post = Post::paginate(3);
            return view('pagination_child', compact('post'))->render();
        }
    }
    function fetch_user(Request $request)
    {
        if ($request->ajax()) {
            $user = User::paginate(3);
            return view('user_pagination_child', compact('user'))->render();
        }
    }
}
