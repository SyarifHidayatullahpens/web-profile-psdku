<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Major;
use Auth;
use Validator;
use DataTables;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use DB;

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

    public function store(StoreAboutRequest $request)
    {
        $validateData = $request->validated();
        $about = About::create($validateData);
        
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

    public function update(UpdateAboutRequest $request, About $about)
    {
        $validateData = $request->validated();

        $about = About::update($validateData);
        
        return redirect()->route('abouts.index')->with('success', 'Data Was Updated ');
    }

    public function destroy($id)
    {
        DB::table('abouts')->where(['id'=>$id])->delete();
       return back();
    }
}
