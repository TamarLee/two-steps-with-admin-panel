<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recepie;

class RecepiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recepies = Recepie::latest()->paginate(5); return view('recepies.index', compact('recepies'))->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recepies.create');
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
            'ingredients' => 'required',
            'description' => 'required',
            'image' => 'required',
            'link' => 'required',
            'tag' => 'required',
            'author' => 'required',
        ]);
        Recepie::create($request->all());
        return redirect()->route('recepies.index')->with('success', 'Recepie Created Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recepie = Recepie::find($id);
        return view('recepies.show', compact('recepie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recepie = Recepie::find($id);
        return view('recepies.edit', compact('recepie'));
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
            'ingredients' => 'required',
            'description' => 'required',
            'image' => 'required',
            'link' => 'required',
            'tag' => 'required',
            'author' => 'required',
        ]);
        Recepie::find($id)->update($request->all());
        return redirect()->route('recepies.index')->with('success', 'Recepie Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Recepie::find($id)->delete();
        return redirect()->route('recepies.index')->with('success', 'Recepie Deleted Successfully');
    }
}
