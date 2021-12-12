<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;
use DataTables;
use App\Http\Requests\StoreMajorRequest;
use App\Http\Requests\UpdateMajorRequest;

class MajorController extends Controller
{
    public function index(Request $request)
    {
        $major = Major::all();
        if ($request->ajax()) {
            return datatables()->of($major)->make(true);
        }
        return view('admin.majors.index', compact('major'));
    }

    public function create()
    {
        return view('admin.majors.create');
    }

    public function store(StoreMajorRequest $request)
    {
        $validateData = $request->validated();
        
        $major = Major::create($validateData);

        return redirect()->route('majors.index')->with('success', 'Data added Successfully');

    }

    public function show(Major $major)
    {
        return view('admin.majors.show', ['major' => $major]);
    }

    public function edit(Major $major)
    {
       return view('admin.majors.edit',['major' => $major]);
    }

    public function update(UpdateMajorRequest $request, Major $major)
    {
        $validateData = $request->validated();
        
        $major = Major::update($validateData);

        return redirect()->route('majors.index')->with('success', 'Data added Successfully');
        
    }

    public function destroy(Major $major)
    {
        $major->delete();
        return redirect()->route('majors.index')->with('success','Deleted Successfully');
    }
}