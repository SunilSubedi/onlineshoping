<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller
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
        $category=Category::all();
        return view('backend.category.list')->withCategory($category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


                return view('backend.category.create');

        
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
             'name' => 'required',
             ]);
       $category = new Category;
       $category->name=$request->name;
       $category->save();
       Session::flash('success','Sucessfully Inserted');
       return redirect()->route('category.index');
      

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //return redirect('category.create');
        //return redirect('category.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category= Category::find($id);
        return view('backend.category.edit')->withCategory($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
                'name'=>'required',

            ]);
       $category = Category::find($id);
       $category->name= $request->name;
       $category->update();
       Session::flash('success','Sucessfully Updated');

       return redirect()->route('category.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();
        Session::flash('success','Sucessfully Deleted');
                return redirect()->route('category.index');
    }
}
