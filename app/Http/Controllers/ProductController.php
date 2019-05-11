<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Product_Images;
use Auth;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')
        ->select('products.*','categories.categoryName')
        ->join('categories','products.category_id','categories.id')
        // ->join('product__images','products.id','product__images.product_id')
        ->where('supplier_id',Auth::user()->id)
        ->get();
        return view('admin.product.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories=Category::all();
       return view('admin.product.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['title'=>'required','description'=>'required','price'=>'required','status'=>'required','cover_image'=>'required',
        ]);
      

        $profileImage = $request->cover_image;
        $name = $profileImage->getClientOriginalName();
        $uploadPath = 'Image/product_images/';
        $profileImage->move($uploadPath, $name);
        $imageUrl = $uploadPath . $name;

        $product = new Product();
        $product->title = $request->title;
        $product->category_id = $request->categoryId;
        $product->supplier_id = Auth::user()->id;
        $product->price = $request->price;
        $product->quentity = $request->quentity;
        $product->description = $request->description;
        $product->cover_image = $imageUrl;
        $product->status = $request->status;
        $product->save();


             foreach ($request->photos as $photo) {
        $productImage = $photo;
        $name = $productImage->getClientOriginalName();
        $uploadPath = 'Image/product_images/';
        $productImage->move($uploadPath, $name);
        $imageUrl = $uploadPath . $name;


            Product_Images::create([
                'product_id' => $product->id,
                'image' => $imageUrl,
            ]);
        }
        return redirect('/product')->with('message','Product Info save successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
