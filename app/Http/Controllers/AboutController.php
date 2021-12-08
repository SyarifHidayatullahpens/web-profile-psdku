<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Major;
use Auth;
use Validator;
use DataTables;


class AboutController extends Controller
{
    public function index(Request $request)
    {
        $about = About::all();
        return view ('admin.abouts.index', compact('about'));
    }

    public function create()
    {
        return view('admin.abouts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description'   => 'required|string'
        ]);

        $about = About::create($request->all());
        
        return redirect()->route('abouts.index')->with('success', 'Data Added Successfully ');

    }

    public function show(About $about)
    {
       return view('admin.abouts.show', ['about' => $about]);
    }

    public function edit(About $about)
    {
       return view('admin.abouts.edit', ['about' => $about]);
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'description'   => 'required|string'
        ]);

        $about = About::update($request->all());
        
        return redirect()->route('abouts.index')->with('success', 'Data Was Updated ');
    }

    public function destroy(About $about)
    {
       $about->delete();  
       return back()->with('success','Deleted Successfully');
    }
}
