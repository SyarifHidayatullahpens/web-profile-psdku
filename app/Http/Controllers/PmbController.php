<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pmb;

class PmbController extends Controller
{
    public function index(Request $request)
    {
        $pmb  = Pmb::all();
        
        if($request->ajax()){
            return DataTables::of($pmb)
                    ->addColumn('name',function($row){
                        return $row->name;
                    })
                    ->addColumn('date',function($row){
                        return $row->date;
                    })
                    ->addColumn('description',function($row){
                        return $row->description;
                    })
                    ->addColumn('action',function($row){
                        $button = '';
                        if(('pmbs-edit')){
                        $button .=   '<a href="/pmbs/'.$row->id.'/edit" class="btn btn-icon btn-primary btn-icon-only rounded-circle">
                                        <span class="btn-inner--icon"><i class="fas fa-pen-square"></i></span>
                                     </a>';
                        }
                        if(('pmbs-delete')){
                                        
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button class="btn btn-icon btn-danger btn-icon-only rounded-circle" onclick="deleteItem(this)" data-name="'.$row->name.'" data-id="'.$row->id.'">
                                        <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                                    </button>';     
                        }
                        return $button;
                    })
                    ->rawColumns(['name','date','description','action'])
                    ->addIndexColumn()
                    ->make(true);
        }

        return view('admin.pmbs.index', compact('pmb'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Pmb::updateOrCreate(
            ['id' => $request->pmb],
            ['name' => $request->name, 'date' => $request->date, 'description' => $request->description]
        );
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
