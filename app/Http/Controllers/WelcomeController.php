<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Product_Images;
use App\Product;
use App\Review;
use App\User;

class WelcomeController extends Controller
{
       public function index()
    {
    	$products = DB::table('products')
        ->select('products.*','categories.categoryName')
        ->join('categories','products.category_id','categories.id')
        ->where('products.status',1)
        ->orderby('products.created_at','desc')
        ->take(4)
        ->get();
        return view('frontEnd.home.home',compact('products'));
    }

    public function product_details($id){


$product = DB::table('products')
        ->select('products.*','categories.categoryName','users.name','users.id as supplier_id')
        ->join('categories','products.category_id','categories.id')
        ->join('users','products.supplier_id','users.id')
        ->where('products.status',1)
        ->where('products.id',$id)
        ->first();

$reviews = Review::where('product_id',$id)->get();

        $product_image = Product_Images::where('product_id',$product->id)->get();
         return view('frontEnd.product.product_details',compact('product','product_image','reviews'));

    }

    public function product_review(Request $request){

$review = new Review();

$review->user_name = isset(Auth::user()->name) ? Auth::user()->name : $request->name ;
$review->product_id = $request->product_id;
$review->star = $request->star;
$review->options = $request->options;
$review->comment = $request->comment;
$review->save();
return redirect()->back()->with('message','Product Review Save');

    }


    public function product_view(){


$products = DB::table('products')
        ->select('products.*','categories.categoryName')
        ->join('categories','products.category_id','categories.id')
        ->where('products.status',1)
        ->paginate(9);
   return view('frontEnd.product.products',compact('products'));
    }

    public function product_supplier($id){
$products = DB::table('products')
         ->select('products.*','categories.categoryName','users.name','users.id as supplier_id')
        ->join('categories','products.category_id','categories.id')
        ->join('users','products.supplier_id','users.id')
        ->where('products.status',1)
        ->where('products.supplier_id',$id)
        ->paginate(9);

        $suppliers = User::find($id);
   return view('frontEnd.product.products_supplier',compact('products','suppliers'));


    }
}
