<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pmb;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use DataTables;
use App\Http\Requests\StorePmbRequest;
use App\Http\Requests\UpdatePmbRequest;

class PmbController extends Controller
{
    public function index(Request $request)
    {
        $pmb  = Pmb::all();
        if ($request->ajax()) {
            return DataTables::of($pmb)
            ->addColumn('action', function($data){
                $btn .= '<a href="/products/'.$row->id.'/edit" class="btn btn-icon btn-primary btn-icon-only rounded-circle">
                <span class="btn-inner--icon"><i class="fas fa-pen-square"></i></span></a>';
                $btn = '&nbsp;&nbsp';
                $btn =  '<button class="btn btn-icon btn-default btn-icon-only rounded-circle btn-show" data-toggle="modal" data-id="'.$row->id.'">
                <span class="btn-inner--icon"><i class="fas fa-eye"></i></span></button>';
                $btn = '&nbsp;&nbsp';
                $btn = '<button class="btn btn-icon btn-danger btn-icon-only rounded-circle" onclick="deleteItem(this)" data-name="'.$row->product_name.'" data-id="'.$row->id.'">
                <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span></button>';
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('admin.pmbs.index', compact('pmb'));
    }

    public function create()
    {
        return view('admin.pmbs.create');
    }
    
    public function store(StorePmbRequest $request)
    {
        $validateData = $request->validated();

        $pmb = Pmb::create($validateData);
     
        return redirect()->route('pmbs.index')->with('success','Data added Successfully');
    }

    public function show(Pmb $pmb)
    {
       return view('admin.pmbs.show', ['pmb' => $pmb]);
    }

    public function edit(Pmb $pmb)
    {
       return view('admin.pmbs.edit', ['pmb' => $pmb]);
    }

    public function update(UpdatePmbRequest $request, Pmb $pmb)
    {
       $validateData = $request->validated();

       $pmb->update($validateData);

       return redirect()->route('pmbs.index')->with('success', 'Data was Updated');
    }

    public function destroy(Pmb $pmb)
    {
       $pmb->delete();
    }
}