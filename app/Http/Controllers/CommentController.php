<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Comment;
use Session;
use App\Entrepreneur;

class CommentController extends Controller
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
    public function store(Request $request, $entrepreneur_id)
    {
        $this->validate($request, array(
            'name' => 'required',
            'email' =>'required',
            'comment' => 'required'
            ));

        $entrepreneur = Entrepreneur::find($entrepreneur_id);
        

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->reply = $request->reply;
        $comment->reply_name = $request->reply_name;
        $comment->approve = $request->approve;

        $comment->entrepreneur()->associate($entrepreneur);

        $comment->save();

        return redirect()->route('ENP.single-entrepreneur', $entrepreneur->id);
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
        $comment = Comment::find($id);
        return view('admin.comments.edit')->withComment($comment);
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
        $comment = Comment::find($id);

        $this->validate($request, array(
           'approve' => 'required'
        ));


        $comment->reply = $request->reply;
        $comment->reply_name = $request->reply_name;
        $comment->approve = $request->approve;
        $comment->save();


        return redirect()->route('entrepreneur.show', $comment->entrepreneur->id);
    }

        public function delete($id)
         {
            $comment = Comment::find($id);

            return view('admin.comments.delete')->withComment($comment);
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $entrepreneur_id = $comment->entrepreneur->id;
        $comment->delete();

        return redirect()->route('entrepreneur.show', $entrepreneur_id);
    }
}
