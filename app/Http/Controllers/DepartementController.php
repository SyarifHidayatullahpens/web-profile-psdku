<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\Major;
use App\Http\Requests\StoreDepartementRequest;
use App\Http\Requests\UpdateDepartementRequest;

class DepartementController extends Controller
{
    public function index()
    {
        $departement = Departement::all();
        $major= Major::all();
        return view('admin.departements.index', compact( 'departement', 'major'));
    }

    public function create()
    {
        $major = Major::all()->first();
        return view('admin.departements.create', compact('major'));
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
       
    }

    public function getMajor(Request $request){
        $search = $request->search;

        if($serach == ''){
            $majors = Major::select('id', 'name')->limit(5)->get();
        }else {
            $majosr = Major::select('id', 'name')->where('name', 'like', '%' .$search. '%')->get();
        }

        
        $response = array();
        foreach($majosr as $major){
           $response[] = array(
                "id"=>$major->id,
                "text"=>$major->name
           );
        }
  
        return response()->json($response);
    }
}
