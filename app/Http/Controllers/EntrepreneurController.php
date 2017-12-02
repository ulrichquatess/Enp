<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Entrepreneur;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class EntrepreneurController extends Controller
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
        $entrepreneur = Entrepreneur::paginate(10);
        return view('admin.entrepreneurs.index')->with('entrepreneurs', $entrepreneur); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.entrepreneurs.create');
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
               'title' => 'required',
               'content' => 'required',
               'facebook' => '',
               'twitter' => '',
               'linkedin' => '',
               'entrepreneur_image' => 'sometimes|image'
          ]);

          // STORE DATA TO THE DATABASE

         $entrepreneur = new Entrepreneur; 

         $entrepreneur->name = $request->input('name');
         $entrepreneur->title = $request->input('title');
         $entrepreneur->content = $request->input('content');
         $entrepreneur->facebook = $request->input('facebook');
         $entrepreneur->twitter = $request->input('twitter');
         $entrepreneur->linkedin = $request->input('linkedin');

            //HERE WE save the image
            if($request->hasFile('entrepreneur_image')) {
                $image = $request->file('entrepreneur_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $fille = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/entrepreneur/' . $filename);
                $loca = public_path('images/entrepreneur-thumnail/' . $fille);
                Image::make($image)->save($location);
                Image::make($image)->save($loca);

                $entrepreneur->image = $filename;
                $entrepreneur->image = $fille; 

                $entrepreneur->save();
            }


         //save
            $entrepreneur->save();

           return redirect()->route('entrepreneur.show', $entrepreneur->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entrepreneur = Entrepreneur::find($id);

        return view('admin.entrepreneurs.show')->with('entrepreneur', $entrepreneur);
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
        $entrepreneur = Entrepreneur::find($id);
        
        // Return the view page here
        return view('admin.entrepreneurs.edit')->with('entrepreneur', $entrepreneur); 
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
        $entrepreneur = Entrepreneur::find($id);
        
             $this->validate($request, [
               'name' => 'required',
               'title' => 'required',
               'content' => 'required',
               'facebook' => '',
               'twitter' => '',
               'linkedin' => '',
               'entrepreneur_image' => 'sometimes|image'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $entrepreneur = Entrepreneur::find($id);

             $entrepreneur->name = $request->input('name');
             $entrepreneur->title = $request->input('title');
             $entrepreneur->content = $request->input('content');
             $entrepreneur->facebook = $request->input('facebook');
             $entrepreneur->twitter = $request->input('twitter');
             $entrepreneur->linkedin = $request->input('linkedin');

           //HERE WE are checking if someone added a photo or not
           if ($request->hasFile('entrepreneur_image')) {

               #Add new photo
                $image = $request->file('entrepreneur_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $fille = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/entrepreneur/' . $filename);
                $loca = public_path('images/entrepreneur-thumnail/' . $fille);
                Image::make($image)->save($location);
                Image::make($image)->save($loca);

                $oldFilename = $entrepreneur->image;


                //here we update the database
                $entrepreneur->image = $filename;
                $entrepreneur->image = $fille;  

               # Delete the old photo
                Storage::delete($oldFilename);
           }

            $entrepreneur->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('entrepreneur.show', $entrepreneur->id);
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
        $entrepreneur = entrepreneur::find($id);
        Storage::delete($entrepreneur->image);

         $entrepreneur->delete();

         return redirect()->route('entrepreneur.index');
    }

}
