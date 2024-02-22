<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){

        $user_id=Auth()->user()->id;
        $posts = Post::where('user_id',$user_id)->get();
        return view('side.post.index',);
    }

    public function create(){
        return view('side.post.create');
    }
    public function store(request $request){


        post::create([
            'user_id' => Auth::user()->id,
            'nama' => $request->nama,
            'kategory' => $request->kategory,
            'deskripsi' => $request->deskripsi,


        ]);


        return redirect('/Category');

    }
    public function edit(request $request, $id){


        return redirect()->back();
    }
    public function destroy(request $request, $id)
    {
        
    }

}
