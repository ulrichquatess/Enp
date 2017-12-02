<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Business;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class BusinessController extends Controller
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
        $businesss = Business::paginate(10);
        return view('admin.business.index')->with('businesss', $businesss); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.business.create');
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
               'business_image' => 'sometimes|image'
          ]);

          // STORE DATA TO THE DATABASE

         $business = new business; 

         $business->title = $request->input('title');
         $business->content = $request->input('content');
         

            //HERE WE save the image
            if($request->hasFile('business_image')) {
                $image = $request->file('business_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $fille = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/business/' . $filename);
                $loca = public_path('images/business-thumnail/' . $fille);
                Image::make($image)->save($location);
                Image::make($image)->save($loca);

                $business->image = $filename;
                $business->image = $fille; 

                $business->save();
            }


         //save
            $business->save();

           return redirect()->route('business.show', $business->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $business = Business::find($id);

        return view('admin.business.show')->with('business', $business);
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
        $business = business::find($id);
        
        // Return the view page here
        return view('admin.business.edit')->with('business', $business); 
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
        $business = business::find($id);
        
             $this->validate($request, [
               'title' => 'required',
               'content' => 'required',
               'business_image' => 'sometimes|image'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $business = Business::find($id);

             $business->title = $request->input('title');
             $business->content = $request->input('content');
            

           //HERE WE are checking if someone added a photo or not
           if ($request->hasFile('business_image')) {

               #Add new photo
                $image = $request->file('business_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $fille = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/business/' . $filename);
                $loca = public_path('images/business-thumnail/' . $fille);
                Image::make($image)->save($location);
                Image::make($image)->save($loca);

                $oldFilename = $business->image;


                //here we update the database
                $business->image = $filename;
                $business->image = $fille;  

               # Delete the old photo
                Storage::delete($oldFilename);
           }

            $business->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('business.show', $business->id);
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
        $business = business::find($id);
        Storage::delete($business->image);

         $business->delete();

         return redirect()->route('business.index');
    }

}
