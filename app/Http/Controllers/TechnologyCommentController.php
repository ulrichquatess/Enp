<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\TechnologyComment;
use Session;
use App\Technology;

class TechnologyCommentController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => 'store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$comments = Comment::paginate(10);
        //return view('admin.comment.index')->with('comments', $comments); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //  return view('admin.comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $technology_id)
    {
        $this->validate($request, array(
            'name' => 'required',
            'email' =>'required',
            'comment' => 'required'
            ));

        $technology = Technology::find($technology_id);
        

        $technologycomment = new TechnologyComment();
        $technologycomment->name = $request->name;
        $technologycomment->email = $request->email;
        $technologycomment->comment = $request->comment;
        $technologycomment->reply = $request->reply;
        $technologcomment->reply_name = $request->reply_name;
        $technologybusinesscomment->approve = $request->approve;

        $technologycomment->technology()->associate($technology);

        $technologycomment->save();

        return redirect()->route('ENP.single-technology', $technology->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $technologycomment = TechnologyComment::find($id);
        return view('admin.technologycomments.edit')->withTechnologycomment($technologycomment);
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
        $technologycomment = TechnologyComment::find($id);

        $this->validate($request, array(

        ));

        $technologycomment->reply = $request->reply;
        $technologycomment->reply_name = $request->reply_name;
        $technologycomment->approve = $request->approve;
        $technologycomment->save();


        return redirect()->route('technology.show', $technologycomment->technology->id);
    }

        public function delete($id)
         {
            $technologycomment = TechnologyComment::find($id);

            return view('technologycomments.delete')->withComment($comment);
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $technologycomment = TechnologyComment::find($id);
        $technology_id = $technologycomment->technology->id;
        $technologycomment->delete();

        return redirect()->route('technology.show', $technology_id);
    }
}
