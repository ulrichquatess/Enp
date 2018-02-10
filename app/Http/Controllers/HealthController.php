<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Health;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class HealthController extends Controller
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
        $health = Health::paginate();
        return view('admin.healths.index')->with('healths', $health); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.healths.create');
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
               'health_image' => 'sometimes|image'
          ]);

          // STORE DATA TO THE DATABASE

         $health = new Health; 

         $health->title = $request->input('title');
         $health->content = $request->input('content');
            //HERE WE save the image
            if($request->hasFile('health_image')) {
                $image = $request->file('health_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $fille = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/health/' . $filename);
                $loca = public_path('images/health-thumnail/' . $fille);
                Image::make($image)->save($location);
                Image::make($image)->save($loca);

                $health->image = $filename;
                $health->image = $fille; 

                $health->save();
            }


         //save
            $health->save();

           return redirect()->route('health.show', $health->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $health = Health::findorFail($id);

        return view('admin.healths.show')->with('health', $health);
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
        $health = Health::findorFail($id);
        
        // Return the view page here
        return view('admin.healths.edit')->with('health', $health); 
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
        $health = health::findorFail($id);
        
             $this->validate($request, [
               'title' => 'required',
               'content' => 'required',
               'health_image' => 'sometimes|image'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $health = Health::findorFail($id);

             $health->title = $request->input('title');
             $health->content = $request->input('content');

           //HERE WE are checking if someone added a photo or not
           if ($request->hasFile('health_image')) {

               #Add new photo
                $image = $request->file('health_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $fille = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/health/' . $filename);
                $loca = public_path('images/health-thumnail/' . $fille);
                Image::make($image)->resize(640, 427)->save($location);
                Image::make($image)->save($loca);

                $oldFilename = $health->image;


                //here we update the database
                $health->image = $filename;
                $health->image = $fille;  

               # Delete the old photo
                Storage::delete($oldFilename);
           }

                $health->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('health.show', $health->id);
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
        $health = Health::findorFail($id);
        Storage::delete($health->image);

         $health->delete();

         return redirect()->route('health.index');
    }

}
