<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pmb;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use DataTables;


class PmbController extends Controller
{
    public function index(Request $request)
    {
        $pmb  = Pmb::all();
        if ($request->ajax()) {
            return DataTables::of($pmb)->make(true);
        }
        return view('admin.pmbs.index', compact('pmb'));
    }

    public function create()
    {
        return view('admin.pmbs.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|min:4|max:20|unique:pmbs',
            'date'          =>  'required|date',
            'description'   =>  'required|string',
        ]);

        $pmb = Pmb::create($request->all());
        
        if($pmb){
            return redirect()->route('pmbs.index')->with('success','Data added Successfully');
        }else {
            return back()->with('warning','Please Check Form Input');
        }
      
    }

    public function show(Pmb $pmb)
    {
       return view('admin.pmbs.show', ['pmb' => $pmb]);
    }

    public function edit(Pmb $pmb)
    {
       return view('admin.pmbs.edit', ['pmb' => $pmb]);
    }

    public function update(Request $request, Pmb $pmb)
    {
       $request->validate([
           'name'           => 'required|string|min:4|max:20|unique:pmbs',
           'date'           => 'required|date',
           'description'    => 'required|string',
       ]);

       $pmb->update($request->all());

       return redirect()->route('pmbs.index')->with('success', 'Data was Updated');
    }

    public function destroy(Pmb $pmb)
    {
       $pmb->delete();
       return back()->with('success', 'Data was deleted');
    }
}