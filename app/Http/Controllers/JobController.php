<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Job;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class JobController extends Controller
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
        $job = Job::paginate();
        return view('admin.jobs.index')->with('jobs', $job); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jobs.create');
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
               'job_image' => 'sometimes|image'
          ]);

          // STORE DATA TO THE DATABASE

         $job = new Job; 

         $job->title = $request->input('title');
         $job->content = $request->input('content');
            //HERE WE save the image
            if($request->hasFile('job_image')) {
                $image = $request->file('job_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $fille = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/job/' . $filename);
                $loca = public_path('images/job-thumnail/' . $fille);
                Image::make($image)->resize(534, 356, function($constraint) {
                    $constraint->aspectRatio();
                })->save($location);
                Image::make($image)->save($loca);

                $job->image = $filename;
                $job->image = $fille; 

                $job->save();
            }


         //save
            $job->save();

           return redirect()->route('job.show', $job->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::findorFail($id);

        return view('admin.jobs.show')->with('job', $job);
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
        $job = Job::findorFail($id);
        
        // Return the view page here
        return view('admin.jobs.edit')->with('job', $job); 
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
        $job = Job::findorFail($id);
        
             $this->validate($request, [
               'title' => 'required',
               'content' => 'required',
               'job_image' => 'sometimes|image'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $job = Job::findorFail($id);

             $job->title = $request->input('title');
             $job->content = $request->input('content');

           //HERE WE are checking if someone added a photo or not
           if ($request->hasFile('job_image')) {

               #Add new photo
                $image = $request->file('job_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $fille = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/job/' . $filename);
                $loca = public_path('images/job-thumnail/' . $fille);
                Image::make($image)->save($location);
                Image::make($image)->save($loca);

                $oldFilename = $job->image;


                //here we update the database
                $job->image = $filename;
                $job->image = $fille;  

               # Delete the old photo
                Storage::delete($oldFilename);
           }

            $job->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('job.show', $job->id);
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
        $job = job::findorFail($id);
        Storage::delete($job->image);

         $job->delete();

         return redirect()->route('job.index');
    }

}
