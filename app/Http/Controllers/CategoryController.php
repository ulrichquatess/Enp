<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Category;
use Session;
use Pagination;

class CategoryController extends Controller
{

    public function __construct() { 

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
        //This is where we read all our blog post
        $categorys= Category::paginate();
        return view('admin.categorys.index')->with('categorys', $categorys); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //VALIDATE DATA

        $this->validate($request, [
               'name' => 'required',
               'content' => 'required',

          ]);

          // STORE DATA TO THE DATABASE

         $category = new Category; 

         $category->name = $request->name;
         $category->content = $request->content;
        

         //save
            $category->save();

           return redirect()->route('category.show', $category->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findorFail($id);

        return view('admin.categorys.show')->with('category', $category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Assign or find the $id of each field
        $category = Category::findorFail($id);
        
        // Return the view page here
        return view('admin.categorys.edit')->with('category', $category); 
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
        $category = Category::findorFail($id);
        
             $this->validate($request, [
                'name' => 'required',
                'content' => 'required'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $category = Category::findorFail($id);

             $category->name = $request->input('name');
             $category->content = $request->content;
            

            $category->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('category.show', $category->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         ///Here we collect the $id
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }

}
