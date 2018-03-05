<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\ArtistComment;
use Session;
use App\Artist;

class ArtistCommentController extends Controller
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
    public function store(Request $request, $artist_id)
    {
        $this->validate($request, array(
            'name' => 'required',
            'email' =>'required',
            'comment' => 'required'
            ));

        $artist = Artist::find($artist_id);
        

        $artistcomment = new ArtistComment();
        $artistcomment->name = $request->name;
        $artistcomment->email = $request->email;
        $artistcomment->comment = $request->comment;
        $artistcomment->reply = $request->reply;
        $artistcomment->reply_name = $request->reply_name;
        $artistcomment->approve = $request->approve;

        $artistcomment->artist()->associate($artist);

        $artistcomment->save();

        return redirect()->route('ENP.single-artist', $artist->id);
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
        $artistcomment = ArtistComment::find($id);
        return view('admin.artistcomments.edit')->withArtistcomment($artistcomment);
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
        $artistcomment = ArtistComment::find($id);

        $this->validate($request, array(

        ));

        $artistcomment->reply = $request->reply;
        $artistcomment->reply_name = $request->reply_name;
        $artistcomment->approve = $request->approve;
        $artistcomment->save();


        return redirect()->route('artist.show', $artistcomment->artist->id);
    }

        public function delete($id)
         {
            $artistcomment = ArtistComment::find($id);

            return view('artistcomments.delete')->withArtistcomment($artistcomment);
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artistcomment = ArtistComment::find($id);
        $artist_id = $artistcomment->artist->id;
        $artistcomment->delete();

        return redirect()->route('artist.show', $artist_id);
    }
}
