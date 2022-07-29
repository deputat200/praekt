<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $tel = Post::all();
        return view('welcome',compact('tel'));
    }
    public function test(Request $req)
    {
       $tel = new Post;
       $tel->cil = $req->input('cil');
       $tel->social = $req->input('social');

       $tel->save();

       return redirect('/');
       //keremasmi shu
       
      
    }

    
}
