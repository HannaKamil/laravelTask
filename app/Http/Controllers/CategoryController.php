<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.addCategory');
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

        $category = new Category();

        $category->category_name = $request->form_categoryName;
        $category->save();
        return redirect('/addCategory');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $categories= DB::table('categories')->orderBy('id' , 'asc')->paginate(8);
        return view('admin.allCategories', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $id)
    {
        return view('admin.editCategory', compact('id'));
    }


    public function update(Request $request, $id)
    {
        DB::table('categories')->where('id', $id)->update(array('category_name' => $request->form_categoryName,));

        return redirect('/allCategories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $id)
    {

        $id->delete();
        return back();
    }
}
