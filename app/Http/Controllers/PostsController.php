<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //index()の関数を作成
    public function index()
    {
        return view('posts.index');
        //viewsのpostのindexを返す
    }
}