<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{

    public function index()
    {
        $post = DB::select('select * from posts');
        dd($post);
    }
    //
}
