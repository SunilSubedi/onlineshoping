<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Category;
use  Session;
use Image;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $product = Product::paginate(4);
        return view('backend.product.list')->withProduct($product);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.product.create')->withCategory($category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
             'title'=>'required',
             'description'=>'required',
             'image' =>'required',
             'category_id'=>'required',
             'sub_category' =>'required',
             'price' =>'required|integer',
             'quantity' =>'required|integer',

            ]);
        $product = new Product();
        $product->title=$request->title;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->sub_category = $request->sub_category;
        $product->price = $request->price;
        $product->quantity= $request->quantity;
        $product->status = $request->status;
        if($request->hasfile('image'))
        {
           $name = $request->image;
           $filename = time().'.'. $name->getClientOriginalName();
           $location = public_path('/images/'.$filename);
           Image::make($name)->resize(500,300)->save($location);
           $product->image = $filename;

        }
        $product->save();
        Session::flash('success','Sucessfully saved');
        return redirect()->route('product.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('backend.product.show')->withProduct($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
   {    $category = Category::all();
        $product = Product::find($id);
        return view('backend.product.edit')->withProduct($product)->withCategory($category);
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
        $this->validate($request,[
               'title'=>'required',
             'description'=>'required',
             'image' =>'required',
             'category_id'=>'required',
             'sub_category' =>'required',
             'price' =>'required|integer',
             'quantity' =>'required|integer',
            ]);

       $product = Product::find($id);
        $product->title=$request->title;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->sub_category = $request->sub_category;
        $product->price = $request->price;
        $product->quantity= $request->quantity;
        $product->status = $request->status;
       if($request->hasfile('image'))
        {
           $name = $request->image;
           $filename = time().'.'. $name->getClientOriginalName();
           $location = public_path('/images/'.$filename);
           Image::make($name)->resize(500,300)->save($location);
           $product->image = $filename;

        }
        $product->update();
        Session::flash('success','Successfully Updated');
        return redirect()->route('product.index');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        Session::flash('success','Sucessfully deleted');
        return redirect()->route('product.index');
    }
}
