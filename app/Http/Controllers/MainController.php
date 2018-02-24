<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Menu;

class MainController extends Controller
{
    public function showAll(){
    	$tags = Tag::all();
    	$menus = Menu::all();
    	return view('welcome', ['tags' => $tags, 'menus' => $menus]);
    }
}
