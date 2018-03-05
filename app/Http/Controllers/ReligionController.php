<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Religion;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class ReligionController extends Controller
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
        $religion = Religion::paginate();
        return view('admin.religions.index')->with('religions', $religion); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.religions.create');
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
               'religion_image' => 'sometimes|image'
          ]);

          // STORE DATA TO THE DATABASE

         $religion = new Religion; 

         $religion->title = $request->input('title');
         $religion->content = $request->input('content');
            //HERE WE save the image
            if($request->hasFile('religion_image')) {
                $image = $request->file('religion_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $fille = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/religion/' . $filename);
                $loca = public_path('images/religion-thumnail/' . $fille);
                Image::make($image)->resize(534, 356, function($constraint) {
                    $constraint->aspectRatio();
                })->save($location);
                Image::make($image)->save($loca);

                $religion->image = $filename;
                $religion->image = $fille; 

                $religion->save();
            }


         //save
            $religion->save();

           return redirect()->route('religion.show', $religion->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $religion = Religion::findorFail($id);

        return view('admin.religions.show')->with('religion', $religion);
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
        $religion = Religion::findorFail($id);
        
        // Return the view page here
        return view('admin.religions.edit')->with('religion', $religion); 
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
        $religion = Religion::findorFail($id);
        
             $this->validate($request, [
               'title' => 'required',
               'content' => 'required',
               'religion_image' => 'sometimes|image'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $religion = Religion::findorFail($id);

             $religion->title = $request->input('title');
             $religion->content = $request->input('content');

           //HERE WE are checking if someone added a photo or not
           if ($request->hasFile('religion_image')) {

               #Add new photo
                $image = $request->file('religion_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $fille = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/religion/' . $filename);
                $loca = public_path('images/religion-thumnail/' . $fille);
                Image::make($image)->resize(534, 356, function($constraint) {
                    $constraint->aspectRatio();
                })->save($location);
                Image::make($image)->save($loca);

                $oldFilename = $religion->image;


                //here we update the database
                $religion->image = $filename;
                $religion->image = $fille;  

               # Delete the old photo
                Storage::delete($oldFilename);
           }

            $religion->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('religion.show', $religion->id);
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
        $religion = Religion::findorFail($id);
        Storage::delete($religion->image);

         $religion->delete();

         return redirect()->route('religion.index');
    }

}
