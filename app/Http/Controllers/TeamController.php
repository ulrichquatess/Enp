<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Team;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class TeamController extends Controller
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
        $teams = Team::paginate();
        return view('admin.team.index')->with('teams', $teams); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
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
               'email' => 'required',
               'description' => 'required',
               'facebook' => '',
               'twitter' => '',
               'linkedin' => '',
               'team_image' => 'sometimes|image'
          ]);

          // STORE DATA TO THE DATABASE

         $team = new Team; 

         $team->name = $request->input('name');
         $team->email = $request->input('email');
         $team->description = $request->input('description');
         $team->facebook = $request->input('facebook');
         $team->twitter = $request->input('twitter');
         $team->linkedin = $request->input('linkedin');

            //HERE WE save the image
            if($request->hasFile('team_image')) {
                $image = $request->file('team_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/team/' . $filename);
                Image::make($image)->resize(534, 356, function($constraint) {
                    $constraint->aspectRatio();
                })->save($location);

                $team->image = $filename;

                $team->save();
            }


         //save
            $team->save();

           return redirect()->route('team.show', $team->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::find($id);

        return view('admin.team.show')->with('team', $team);
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
        $team = Team::find($id);
        
        // Return the view page here
        return view('admin.team.edit')->with('team', $team); 
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
        $team = Team::find($id);
        
             $this->validate($request, [
               'name' => 'required',
               'email' => 'required',
               'description' => 'required',
               'facebook' => '',
               'twitter' => '',
               'linkedin' => '',
               'team_image' => 'sometimes|image'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $team = Team::find($id);

             $team->name = $request->input('name');
             $team->email = $request->input('email');
             $team->description = $request->input('description');
             $team->facebook = $request->input('facebook');
             $team->twitter = $request->input('twitter');
             $team->linkedin = $request->input('linkedin');

           //HERE WE are checking if someone added a photo or not
           if ($request->hasFile('team_image')) {

               #Add new photo
                $image = $request->file('team_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/team/' . $filename);
                Image::make($image)->resize(534, 356, function($constraint) {
                    $constraint->aspectRatio();
                })->save($location);

                $oldFilename = $team->image;


                //here we update the database
                $team->image = $filename;

               # Delete the old photo
                Storage::delete($oldFilename);
           }

            $team->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('team.show', $team->id);
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
        $team = team::find($id);
        Storage::delete($team->image);

         $team->delete();

         return redirect()->route('team.index');
    }

}
