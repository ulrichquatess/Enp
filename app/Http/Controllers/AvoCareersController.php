<?php 

namespace App\Http\Controllers;

use View;
use App\AvoCareer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller as BaseController;

class AvoCareersController extends BaseController {

    public function index() {

        return view('careers.apply');
    }

    public function store(Request $request)
    {


        $avoCareer = new AvoCareer;
        $avoCareer->name = $request->name;
        $avoCareer->email = $request->email;
        $avoCareer->resume = $request->resume;
        $avoCareer->save();

        $fileName = $avoCareer->id . '.' . 
        $request->file('resume')->getClientOriginalExtension();

        $request->file('resume')->move(
            base_path() . '/public/images/uploads', $fileName
        );

        return redirect()->route('apply.show', $avoCareer->id);
    
    }

    public function show(){

        $comments = AvoCareer::paginate(10);
        return view('careers.show')->with('comments', $comments);
    }

}


?>