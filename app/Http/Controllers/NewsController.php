<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use  Storage;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $news = News::all();
        // dd($news);
        return view('admin.news.index',compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(StoreNewsRequest $request)
    {
       $validateData = $request->validated();

       $image = $request->file('image');

            $image_name = str_split(md5($image), 20);
            $ext = $image->getClientOriginalExtension();
            $image->move("images", $image_name[0].".".$ext);

            News::create([
                'name'              => $request->name,
                'date'              => $request->date,
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
       return view('admin.news.edit',['news' => $news]);
    }

    public function update(UpdateNewsRequest $request, $id)
    {
        $news = News::findOrFail($id);

        $validateData = $request->validated();

        if($request->file('image') == "") 
        {

            $news->update([
                'name'           => $request->name,
                'date'              => $request->date,
                'image'              => $image_name[0].".".$ext,
                'description'          => $request->description,
            ]);
        } else {
            Storage::disk("local")->delete("images".$news->image);
    
            //upload new image
            $image = $request->file('image');
            $image_name = str_split(md5($image),20);
            $ext = $image->getClientOriginalExtension();
            $image->move("images", $image_name[0].".".$ext);

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

        return back();
    }
}
