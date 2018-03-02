<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Tag;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all(); 
        return view('tags.index', ['tags'=>$tags]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate([
            'title' => 'required',
            'image' => 'required',
            'link' => 'required',
        ]);


        $originalFile = " ";
        if($request->hasFile('image')){

            $file = $request->file('image');
            $destinationPath = public_path('img');
            $originalFile = $file->getClientOriginalName();
            $file->move($destinationPath, $originalFile);

        }
        
        
        $data = [
            'title' => $request->title,
            'image' => $originalFile,
            'link' => $request->link,
        ];

        Tag::create($data);
        return redirect()->route('tags.index')->with('success', 'Tag Created Succesfully');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tag::find($id);
        return view('tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'title' => 'required',
            'image' => 'required',
            'link' => 'required',
        ]);
        $originalFile = " ";
        if($request->hasFile('image')){

            $file = $request->file('image');
            $destinationPath = public_path('img');
            $originalFile = $file->getClientOriginalName();
            $file->move($destinationPath, $originalFile);

        }
        
        
        $data = [
            'title' => $request->title,
            'image' => $originalFile,
            'link' => $request->link,
        ];

        Tag::find($id)->update($data);
        return redirect()->route('tags.index')->with('success', 'Tag Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tag::find($id)->delete();
        return redirect()->route('tags.index')->with('success', 'Tag Deleted Successfully');
    }
}
