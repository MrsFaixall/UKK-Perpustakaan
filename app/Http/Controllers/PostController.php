<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        return view('admin.post.index');
    }

    public function create(){
        return view('admin.post.create');
    }
    public function store(request $request){


        post::create([
            'user_id' => auth(),
            'title' => ('title'),


        ])
        ;


    }

}
