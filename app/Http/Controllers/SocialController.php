<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Social;
use Session;
use Pagination;

class SocialController extends Controller
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
        $socials= Social::all();
        return view('admin.socials.index')->with('socials', $socials); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.socials.create');
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
               'facebook' => 'required',
               'twitter' => 'required',
               'linkedin' => 'required'
               
          ]);

          // STORE DATA TO THE DATABASE

         $social = new Social; 

         $social->facebook = $request->input('facebook');
         $social->twitter = $request->input('twitter');
         $social->linkedin = $request->input('linkedin');
        

         //save
            $social->save();

           return redirect()->route('social.index', $social->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $social = Social::find($id);

        return view('admin.socials.show')->with('social', $social);
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
        $social = Social::find($id);
        
        // Return the view page here
        return view('admin.socials.edit')->with('social', $social); 
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
        $social = Social::find($id);
        
             $this->validate($request, [
               'facebook' => 'required',
               'twitter' => 'required',
               'linkedin' => 'required'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $social = Social::find($id);

         $social->facebook = $request->input('facebook');
         $social->twitter = $request->input('twitter');
         $social->linkedin = $request->input('linkedin');
            

            $social->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('social.show', $social->id);
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
        $social = Social::find($id);
        $social->delete();
        return redirect()->route('social.index');
    }

}
