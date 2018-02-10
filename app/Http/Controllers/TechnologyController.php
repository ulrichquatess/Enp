<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Technology;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class TechnologyController extends Controller
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
        $technologys = Technology::paginate();
        return view('admin.technologys.index')->with('technologys', $technologys); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.technologys.create');
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
               'title' => 'required',
               'content' => 'required',
               'technology_image' => 'sometimes|image'
          ]);

          // STORE DATA TO THE DATABASE

         $technology = new technology; 

         $technology->title = $request->input('title');
         $technology->content = $request->input('content');
         

            //HERE WE save the image
            if($request->hasFile('technology_image')) {
                $image = $request->file('technology_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/technology/' . $filename);
                Image::make($image)->save($location);

                $technology->image = $filename;

                $technology->save();
            }

         //save
            $technology->save();

           return redirect()->route('technology.show', $technology->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $technology = Technology::find($id);

        return view('admin.technologys.show')->with('technology', $technology);
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
        $technology = Technology::find($id);
        
        // Return the view page here
        return view('admin.technologys.edit')->with('technology', $technology); 
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
        $technology = Technology::find($id);
        
             $this->validate($request, [
               'title' => 'required',
               'content' => 'required',
               'technology_image' => 'sometimes|image'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $technology = Technology::find($id);

             $technology->title = $request->input('title');
             $technology->content = $request->input('content');
            

           //HERE WE are checking if someone added a photo or not
           if ($request->hasFile('technology_image')) {

               #Add new photo
                $image = $request->file('technology_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/technology/' . $filename);
                Image::make($image)->save($location);

                $oldFilename = $technology->image;


                //here we update the database
                $technology->image = $filename; 

               # Delete the old photo
                Storage::delete($oldFilename);
           }

            $technology->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('technology.show', $technology->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //Here we collect the $id
        $technology = technology::find($id);
        Storage::delete($technology->image);

         $technology->delete();

         return redirect()->route('technology.index');
    }

}
