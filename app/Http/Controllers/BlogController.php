<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Entrepreneur;
use App\Business;
use App\Technology;
use App\Job;
use App\Artist;
use Pagination;
use Mail;
use App\Mail\SendMail;
use App\Team;



class BlogController extends Controller
{
    public function index() {
    //this part deals with Entrepreneur
       $entrepreneurs = Entrepreneur::all();
       $entre = Entrepreneur::orderBy('created_at', 'desc')->limit(3)->get();
       $last = Entrepreneur::orderBy('updated_at', 'desc')->limit(3)->get();
       $update = Entrepreneur::orderBy('created_at', 'desc')->limit(4)->get();
       //This Part Deals with Business
       $business = Business::paginate(4);
       $singlebusiness = Business::orderBy('updated_at', 'desc')->limit(1)->get();
       //This Part Deals Deals Technology
       $techno = Technology::orderBy('created_at', 'desc')->limit(8)->get();
       $smalltechno = Technology::orderBy('created_at', 'desc')->limit(8)->get();
       //this parts load the artis or celebritiest stories on the sidebar
       $artist = Artist::orderBy('created_at', 'desc')->limit(4)->get();
 	    return view('ENP.index')->with('entrepreneurs', $entrepreneurs)->with('entre', $entre)->with('update', $update)->with('last', $last)->with('business', $business)->with('singlebusiness', $singlebusiness)->with('techno', $techno)->with('smalltechno', $smalltechno)->with('artist', $artist);
    }

    //This function below is used to load the dashbordnof teh backend page for the admin area

    public function dashboard() {

        return view('ENP.dashboard');
    } 

    public function contact() {
     	return view('ENP.contact');    
    }

//This Part is responsiple for sending emails

     public function postContact(Request $request) {

        Mail::send(new sendMail());
        return view('ENP.contact');    
    }

//This one here is in charge of showing allthe entrepruer blogs on one page with pagination
    public function entrepreneur() {
      $entrepreneurs = Entrepreneur::paginate(5);
      return view('ENP.entrepreneur')->with('entrepreneurs', $entrepreneurs);    
    }

    //This Parts shows all the archives for the business Topics
    public function business() {

      $businesses = business::paginate(5);
      return view('ENP.business')->with('businesses', $businesses);    
    }

    //This Parts shows all the archives for the Technology Topics
    public function technology() {

      $technologys = Technology::paginate(5);
      return view('ENP.technology')->with('technologys', $technologys);    
    }

     //This Parts shows all the archives for the Job Oportunity Topics
    public function job() {

      $jobs = Job::paginate(5);
      return view('ENP.job')->with('jobs', $jobs);    
    }


    public function getSingleEntrepreneur($id){
    	  $entrepreneur = Entrepreneur::where('id', '=', $id)->first();
        $last = Entrepreneur::orderBy('created_at', 'desc')->limit(3)->get();
        $post = Entrepreneur::orderBy('created_at', 'asc')->limit(3)->get();
    	return view('ENP.single-entrepreneur')->with('entrepreneur', $entrepreneur)->with('last', $last)->with('post', $post);
    }

    public function getSingleBusiness($id){
        $business = Business::where('id', '=', $id)->first();
        $lasts = Business::orderBy('created_at', 'desc')->limit(3)->get();
        $posts = Business::orderBy('created_at', 'asc')->limit(3)->get();
        return view('ENP.single-business')->with('business', $business)->with('lasts', $lasts)->with('posts', $posts);
    }

     public function getSingleTechnology($id){
        $technology = Technology::where('id', '=', $id)->first();
        $lasts = Technology::orderBy('created_at', 'desc')->limit(3)->get();
        $posts = Technology::orderBy('created_at', 'asc')->limit(3)->get();
        return view('ENP.single-technology')->with('technology', $technology)->with('lasts', $lasts)->with('posts', $posts);
    }

   public function team() {
         $teams = Team::paginate(4);
         return view('ENP.team')->with('teams', $teams);    
    }

    public function getSingleTeam($id){
        $team = Team::where('id', '=', $id)->first();
        return view('ENP.single-team')->with('team', $team);
    }
}


