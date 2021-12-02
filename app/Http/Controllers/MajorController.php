<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;
use DataTables;

class MajorController extends Controller
{
    public function index(Request $request)
    {
        $major = Major::all();
        return view('admin.majors.index', compact('major'));
    }

    public function create()
    {
        return view('admin.majors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|min:5|max:100|unique:majors',
            'description' => 'required|string',
        ]);
        $data   = $request->all();
        $major  = Major::create($data);

        return redirect()->route('majors.index')->with('success', 'Data Added Successfully ' );
    }

    public function show(Major $major)
    {
        return view('admin.majors.show', ['major' => $major]);
    }

    public function edit(Major $major)
    {
       return view('admin.majors.edit',['major' => $major]);
    }

    public function update(Request $request, Major $major)
    {
        $request->validate([
            'name'          => 'required|string|max:100|unique:majors',
            'description'   => 'required|string',
        ]);

        $major->update($request->all());
        
        return redirect()->route('majors.index')->with('success','You Updated New Data');
        
    }

    public function destroy(Major $major)
    {
        $major->delete();
        return redirect()->route('majors.index')->with('success','Deleted Successfully');
    }
}
