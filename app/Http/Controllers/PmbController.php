<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pmb;
use Illuminate\Support\Facades\Storage;


class PmbController extends Controller
{
    public function index(Request $request)
    {
        $pmb  = Pmb::all();
        return view('admin.pmbs.index', compact('pmb'));
    }

    public function create()
    {
        return view('admin.pmbs.create');
    }

    public function store(Request $request)
    {
        // Pmb::updateOrCreate(
        //     ['id' => $request->pmb],
        //     ['name' => $request->name, 'date' => $request->date, 'description' => $request->description]
        // );
        $this->validate($request, [
            'name'     => 'required|string|max:20',
            'date'   => 'required|date',
            'description'   => 'required|text'
        ]);
    
        $data = $request->all();
        $pmb = Pmb::create($data);
        if($pmb){
            return redirect()->route('pmbs.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('pmbs.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
       $pmb = Pmb::find($id);
       return response()->json($pmb);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
       $pmb = Pmb::find($id);
       return response()->json(['Data deleted Successfully']);
    }
}
