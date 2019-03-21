<?php

namespace App\Http\Controllers;

use App\allNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('news.addNews');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
//            'title'     => 'required',
//            'category_name'        => 'required',
//            'content'         => 'required',
//            'image_uploaded' => 'required|image|mimes:jpg,jpeg,png'
        ]);

        //the 1st way that save in >> public\Cover_images
        $image = $request->file('imageForm');
        $filename = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('Cover_images') , $filename);

        //the 2nd way that save in >>  storage\app\upload\images
//        $image = $request->file('imageForm');
//        $filename = $image->getClientOriginalName();
//        Storage::put('upload/images/' . $filename, file_get_contents($request->file('imageForm')->getRealPath()));

        $news = new allNews();
        $news->title = $request->form_newsName;
        $news->category_name = $request->category_form;

        $news->image_uploaded = $filename;
        $news->content = $request->contentForm;

        $news->save();
        return redirect('/addNews');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $allNews= DB::table('all_news')->orderBy('id' , 'asc')->paginate(8);
        $dropZoneImages= DB::table('images')->orderBy('id' , 'asc')->paginate(8);
        return view('news.allNews', compact('allNews','dropZoneImages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


      public function showNew($id)
      {
              $news = DB::table('all_news')->where('id', $id)->get();
              return view('news.showOne', compact('news'));

      }



}
