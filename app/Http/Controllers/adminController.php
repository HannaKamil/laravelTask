<?php

namespace App\Http\Controllers;

use App\allNews;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class adminController extends Controller
{
  public function adminPage(){
      $allNews = allNews::all();
      $categories = Category::all();
      return view('admin.index',compact('allNews',$allNews,'categories',$categories));
  }


//---------edit account---------
    public function editAccount(User $id)
    {
        return view('admin.register', compact('id'));
    }

    public function updateAccount(Request $request, $id)
    {
        DB::table('users')->where('id', $id)->update(array('name' => $request->form_name,
            'email' => $request->form_email,
            'password' => $request->form_password));
        return redirect('/control');
    }








//    public function search(){
//
//        $searchWord = Input::get('searchWordsForm');
//        $categories = Category::where('category_name','LIKE', '%'.$searchWord.'%')->get();
//        $news = allNews::where('title','LIKE', '%'.$searchWord.'%')->get();
//
//        if (count($categories) > 0)
//            return view('searchResults.search')->withDetails($categories)->withQuery($searchWord);
//
//        elseif (count($news) > 0)
//            return view('searchResults.search')->withDetails($news)->withQuery($searchWord);
//
//        else
//            return view('searchResults.nodetailsfound');
//    }

    public function search(){

        $searchWord = Input::get('searchWordsForm');
        $categories = Category::where('category_name','LIKE', '%'.$searchWord.'%')->get();
        $news = allNews::where('title','LIKE', '%'.$searchWord.'%')->get();

        if (count($categories) > 0 || count($news) > 0 )
            return view('searchResults.search',compact('categories','news'))->withQuery($searchWord);

        else
            return view('searchResults.nodetailsfound');
    }



}
