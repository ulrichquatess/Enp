<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Entrepreneur;
use App\Business;
use App\Technology;
use App\Job;
use App\Artist;
use App\Health;
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
       //This Part Deals Deals Technology
       $techno = Technology::orderBy('created_at', 'desc')->limit(8)->get();
       $smalltechno = Technology::orderBy('created_at', 'desc')->limit(8)->get();
       //this parts load the artis or celebritiest stories on the sidebar
       $artist = Artist::orderBy('created_at', 'desc')->limit(4)->get();
       //This Part works with Health section
       $health = Health::orderBy('created_at', 'desc')->limit(4)->get();
       $singlebusiness = Health::orderBy('updated_at', 'desc')->limit(1)->get();
       //This is the Job Section
       $job = Job::orderBy('created_at', 'desc')->limit(5)->get();

 	    return view('ENP.index')->with('entrepreneurs', $entrepreneurs)->with('entre', $entre)->with('update', $update)->with('last', $last)->with('business', $business)->with('singlebusiness', $singlebusiness)->with('techno', $techno)->with('smalltechno', $smalltechno)->with('artist', $artist)->with('health', $health)->with('job', $job);
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
      $post = Artist::orderBy('created_at', 'asc')->limit(3)->get();
      $job = Job::orderBy('created_at', 'asc')->limit(3)->get();
      $health = Health::orderBy('created_at', 'asc')->limit(4)->get();
      $technology = Technology::orderBy('created_at', 'asc')->limit(2)->get();
      return view('ENP.entrepreneur')->with('entrepreneurs', $entrepreneurs)->with('post', $post)->with('job', $job)->with('health', $health)->with('technology', $technology);    
    }

    //This Parts shows all the archives for the business Topics
    public function business() {

      $businesses = business::paginate(5);
      $post = Artist::orderBy('created_at', 'asc')->limit(3)->get();
      $job = Job::orderBy('created_at', 'asc')->limit(3)->get();
      $health = Health::orderBy('created_at', 'asc')->limit(4)->get();
      $technology = Technology::orderBy('created_at', 'asc')->limit(2)->get();
      return view('ENP.business')->with('businesses', $businesses)->with('post', $post)->with('job', $job)->with('health', $health)->with('technology', $technology);    
    }

    //This Parts shows all the archives for the Technology Topics
    public function technology() {

      $technologys = Technology::paginate(5);
      $post = Artist::orderBy('created_at', 'asc')->limit(3)->get();
      $job = Job::orderBy('created_at', 'asc')->limit(3)->get();
      $health = Health::orderBy('created_at', 'asc')->limit(4)->get();
      $teck = Technology::orderBy('created_at', 'asc')->limit(2)->get();
      return view('ENP.technology')->with('technologys', $technologys)->with('post', $post)->with('job', $job)->with('health', $health)->with('teck', $teck);   
    }

     //This Parts shows all the archives for the Job Oportunity Topics
    public function job() {

      $jobs = Job::paginate(3);
      $last = Entrepreneur::orderBy('created_at', 'desc')->limit(3)->get();
      $post = Health::orderBy('created_at', 'asc')->limit(5)->get();
      return view('ENP.job')->with('jobs', $jobs)->with('last', $last)->with('post', $post);    
    }


    public function getSingleEntrepreneur($id){
    	  $entrepreneur = Entrepreneur::where('id', '=', $id)->first();
        $last = Entrepreneur::orderBy('created_at', 'desc')->limit(3)->get();
        $post = Entrepreneur::orderBy('created_at', 'asc')->limit(3)->get();
        $job = Job::orderBy('created_at', 'asc')->limit(4)->get();
        $health = Health::orderBy('created_at', 'asc')->limit(4)->get();
        $technology = Technology::orderBy('created_at', 'asc')->limit(2)->get();
    	return view('ENP.single-entrepreneur')->with('entrepreneur', $entrepreneur)->with('last', $last)->with('post', $post)->with('job', $job)->with('health', $health)->with('technology', $technology);
    }

    public function getSingleBusiness($id){
        $business = Business::where('id', '=', $id)->first();
        $lasts = Business::orderBy('created_at', 'desc')->limit(3)->get();
        $posts = Business::orderBy('created_at', 'asc')->limit(3)->get();
        $job = Job::orderBy('created_at', 'asc')->limit(4)->get();
        $health = Health::orderBy('created_at', 'asc')->limit(4)->get();
        $technology = Technology::orderBy('created_at', 'asc')->limit(2)->get();
        return view('ENP.single-business')->with('business', $business)->with('lasts', $lasts)->with('posts', $posts)->with('job', $job)->with('health', $health)->with('technology', $technology);
    }

     public function getSingleTechnology($id){
        $technology = Technology::where('id', '=', $id)->first();
        $lasts = Technology::orderBy('created_at', 'desc')->limit(3)->get();
        $posts = Technology::orderBy('created_at', 'asc')->limit(3)->get();
        $last = Entrepreneur::orderBy('created_at', 'desc')->limit(3)->get();
        $post = Entrepreneur::orderBy('created_at', 'asc')->limit(3)->get();
        $job = Job::orderBy('created_at', 'asc')->limit(4)->get();
        $health = Health::orderBy('created_at', 'asc')->limit(4)->get();
        $teck = Technology::orderBy('created_at', 'asc')->limit(2)->get();
        return view('ENP.single-technology')->with('technology', $technology)->with('lasts', $lasts)->with('posts', $posts)->with('job', $job)->with('health', $health)->with('teck', $teck);
    }

      public function getSingleHealth($id){
        $health = Health::where('id', '=', $id)->first();
        $last = Entrepreneur::orderBy('created_at', 'desc')->limit(3)->get();
        $post = Entrepreneur::orderBy('created_at', 'asc')->limit(3)->get();
        $artist = Artist::orderBy('created_at', 'desc')->limit(5)->get();
        $job = Job::orderBy('created_at', 'desc')->limit(5)->get();
      return view('ENP.single-health')->with('health', $health)->with('last', $last)->with('post', $post)->with('artist', $artist)->with('job', $job);
    }

     public function getSingleTeam($id){
        $team = Team::where('id', '=', $id)->first();
        return view('ENP.single-team')->with('team', $team);
    }

    public function getSingleCelebrity($id){
        $arts = Artist::where('id', '=', $id)->first();
        $last = Entrepreneur::orderBy('created_at', 'desc')->limit(3)->get();
        $post = Entrepreneur::orderBy('created_at', 'asc')->limit(3)->get();
        $artist = Artist::orderBy('created_at', 'desc')->limit(5)->get();
        $job = Job::orderBy('created_at', 'desc')->limit(5)->get();
      return view('ENP.single-celebrity')->with('arts', $arts)->with('last', $last)->with('post', $post)->with('artist', $artist)->with('job', $job);
    }

    public function getSingleJob($id){
        $jop = Job::where('id', '=', $id)->first();
        $last = Job::orderBy('created_at', 'desc')->limit(3)->get();
        $post = Entrepreneur::orderBy('created_at', 'asc')->limit(3)->get();
        $artist = Artist::orderBy('created_at', 'desc')->limit(5)->get();
        $job = Job::orderBy('created_at', 'desc')->limit(5)->get();
      return view('ENP.single-job')->with('jop', $jop)->with('last', $last)->with('post', $post)->with('artist', $artist)->with('job', $job);
    }

   public function team() {
         $teams = Team::paginate(4);
         return view('ENP.team')->with('teams', $teams);    
    }

    public function health() {
         $healths = Health::paginate(6);
         $post = Artist::orderBy('created_at', 'asc')->limit(3)->get();
         $job = Job::orderBy('created_at', 'asc')->limit(3)->get();
         $health = Health::orderBy('created_at', 'asc')->limit(4)->get();
         $technology = Technology::orderBy('created_at', 'asc')->limit(2)->get();
         return view('ENP.health')->with('healths', $healths)->with('post', $post)->with('job', $job)->with('health', $health)->with('technology', $technology);     
    }

    public function celebrities() {
         $artists = Artist::paginate(4);
         $post = Artist::orderBy('created_at', 'asc')->limit(3)->get();
         $job = Job::orderBy('created_at', 'asc')->limit(3)->get();
         $health = Health::orderBy('created_at', 'asc')->limit(4)->get();
         $technology = Technology::orderBy('created_at', 'asc')->limit(2)->get();
         return view('ENP.celebrities')->with('artists', $artists)->with('post', $post)->with('job', $job)->with('health', $health)->with('technology', $technology);    
    }
}


