<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use DB;
class CategoryController extends Controller
{

     public function index(){

$categories=Category::all();
return view('admin.category.index',['categories'=>$categories]);


    }
     
    public function create(){

$categories = Category::where('publicationStatus',1)->get();
return view('admin.category.create',['categories'=>$categories]);


    }
 

public function store(Request $request){

    // dd($request->all());
    $this->validate($request,['name'=>'required','description'=>'required',
        ]);

DB::table('categories')->insert([

'categoryName'=>$request->name,
'categoryDescription'=>$request->description,
'publicationStatus'=>$request->status,

    ]);

//return redirect()->back();
return redirect('/category')->with('message','Category Info save successfully');


    }

     public function show($id)
    {
        //
    }


    public function edit($id){
        $category = Category::where('id',$id)->first();

return view('admin.category.edit',['category'=>$category]);

    }


     public function update(Request $request){

        // dd($request->all());
    $category = Category::find($request->categoryId);
    // dd($category);
    $category->categoryName=$request->name;
    $category->categoryDescription=$request->description;
    $category->publicationStatus=$request->status;
    $category->save();
    return redirect('/category')->with('message','Category Info Update successfully');
    }

public function destroy ($id){
 $category = Category::find($id);
 $category->delete();
 return redirect('/category')->with('message','Category Info delete successfully');
    
}

}
