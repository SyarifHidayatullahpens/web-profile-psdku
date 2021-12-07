<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use  Storage;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $news = News::all();
        return view('admin.news.index',compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
       $request->validate([
           'name'           => 'required|string|max:100',
           'image'          => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           'description'    => 'required|string',
       ]);

       $image = $request->file('image');

            $image_name = str_split(md5($image), 20);
            $ext = $image->getClientOriginalExtension();
            $image->storeAs('public/images', $image_name[0].".".$ext);

            News::create([
                'name'              => $request->name,
                'image'              => $image_name[0].".".$ext,
                'description'       => $request->description,
            ]);
        return redirect()->route('news.index')->with('success', 'Data was Added');
    }

    public function show($id)
    {
        //
    }

    public function edit(News $news)
    {
       return view('admin.news.edit',['task' => $task]);
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $request->validate([
           'name'           => 'required|string|min:20|nullable',
           'image'          => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
           'description'    => 'required|text|nullable',
        ]);

        if($request->file('image') == "") 
        {

            $news->update([
                'name'           => $request->name,
                'description'          => $request->description,
            ]);
        } else {
            Storage::disk('local')->delete('public/images/'.$news->image);
    
            //upload new image
            $image = $request->file('image');
            $image_name = str_split(md5($image),20);
            $ext = $image->getClientOriginalExtension();
            $image->storeAs('public/images', $image_name[0].".".$ext);

            $news->update([
                'name'                  => $request->name,
                'image'                 => $image_name[0].".".$ext,
                'description'          => $request->description,
            ]);
        }
        if($news) {
            return response()->json(['success' => 'Form is successfully submitted!']);
        }
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        Storage::disk('local')->delete('public/images/' .$news->image);
        $news->delete();

        return back()->with('success', 'Delete Data Success');
    }
}
