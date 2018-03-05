<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\HealthComment;
use Session;
use App\Health;

class HealthCommentController extends Controller
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
    public function store(Request $request, $health_id)
    {
        $this->validate($request, array(
            'name' => 'required',
            'email' =>'required',
            'comment' => 'required'
            ));

        $health = Health::find($health_id);
        

        $healthcomment = new HealthComment();
        $healthcomment->name = $request->name;
        $healthcomment->email = $request->email;
        $healthcomment->comment = $request->comment;
        $healthcomment->reply = $request->reply;
        $healthcomment->reply_name = $request->reply_name;
        $healthcomment->approve = $request->approve;

        $healthcomment->health()->associate($health);

        $healthcomment->save();

        return redirect()->route('ENP.single-health', $health->id);
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
        $healthcomment = HealthComment::find($id);
        return view('admin.healthcomments.edit')->withHealthcomment($healthcomment);
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
        $healthcomment = HealthComment::find($id);

        $this->validate($request, array(

        ));

        $healthcomment->reply = $request->reply;
        $healthcomment->reply_name = $request->reply_name;
        $healthcomment->approve = $request->approve;
        $healthcomment->save();


        return redirect()->route('health.show', $healthcomment->health->id);
    }

        public function delete($id)
         {
            $healthcomment = HealthComment::find($id);

            return view('healthcomments.delete')->withHealthcomment($healthcomment);
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $healthcomment = HealthComment::find($id);
        $health_id = $healthcomment->health->id;
        $healthcomment->delete();

        return redirect()->route('health.show', $health_id);
    }
}
