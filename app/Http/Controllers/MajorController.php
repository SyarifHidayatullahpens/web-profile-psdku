<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;
use DataTables;

class MajorController extends Controller
{
    public function index(Request $request)
    {
        $page = 'majors';
        $major = Major::all();

        if($request->ajax()){
            return DataTables::of($about)
                    ->addColumn('description',function($row){

                        return $row->description;
                    })
                    ->addColumn('action',function($row){
                        $button = '';
                        if(('abouts-edit')){
                        $button .=   '<a href="/abouts/'.$row->id.'/edit" class="btn btn-icon btn-primary btn-icon-only rounded-circle">
                                        <span class="btn-inner--icon"><i class="fas fa-pen-square"></i></span>
                                     </a>';
                        }
                        if(('companies-delete')){
                                        
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button class="btn btn-icon btn-danger btn-icon-only rounded-circle" onclick="deleteItem(this)" data-name="'.$row->name.'" data-id="'.$row->id.'">
                                        <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                                    </button>';     
                        }
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
        }


        return view('admin.majors.index', compact('page', 'major'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
