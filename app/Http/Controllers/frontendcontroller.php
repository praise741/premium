<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;

class frontendcontroller extends Controller
{
    public function index()
    {
        $posts=posts::all()->paginate(5);
        $news=posts::where('category' , 'news')->paginate(5);
        $techs= posts::where('category', 'tech')->paginate(5);
        $reviews =posts::where('category' , 'review')->paginate(5);
       return view('welcome',['posts'=> $posts],['news' =>$news], ['tech' => $techs] ,['review' => $reviews]);
    }

}
