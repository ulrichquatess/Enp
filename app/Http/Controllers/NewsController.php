<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Article;
use Session;
use Pagination;

class NewsController extends Controller
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
        $news= Article::paginate(10);
        return view('admin.new.index')->with('news', $news); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.new.create');
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
               'content' => 'required'
               
          ]);

          // STORE DATA TO THE DATABASE

         $new = new Article; 

         $new->content = $request->input('content');
        

         //save
            $new->save();

           return redirect()->route('new.show', $new->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $new = Article::find($id);

        return view('admin.new.show')->with('new', $new);
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
        $new = Article::find($id);
        
        // Return the view page here
        return view('admin.new.edit')->with('new', $new); 
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
        $new = Article::find($id);
        
             $this->validate($request, [
               'content' => 'required'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $new = Article::find($id);

             $new->content = $request->input('content');
            

            $new->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('new.show', $new->id);
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
        $new = Article::find($id);
        $new->delete();
        return redirect()->route('new.index');
    }

}
