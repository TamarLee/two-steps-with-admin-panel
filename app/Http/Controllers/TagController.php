<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function showTags(){
    	$tags = Tag::all();
    	return view('welcome', ['tags' => $tags]);
    }
}
