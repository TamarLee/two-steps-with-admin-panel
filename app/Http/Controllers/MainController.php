<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Menu;
use App\Recepie;

class MainController extends Controller
{
    public function showAll(){
    	$tags = Tag::all();
    	$menus = Menu::all();
    	$recepies = Recepie::paginate(8);
    	$rec = Recepie::all();
    	return view('welcome', ['tags' => $tags, 'menus' => $menus, 'recepies'=>$recepies, 'rec'=>$rec]);
    }
}
