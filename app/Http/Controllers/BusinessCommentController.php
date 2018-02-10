<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\BusinessComment;
use Session;
use App\Business;

class BusinessCommentController extends Controller
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
    public function store(Request $request, $business_id)
    {
        $this->validate($request, array(
            'name' => 'required',
            'email' =>'required',
            'comment' => 'required'
            ));

        $business = Business::find($business_id);
        

        $businesscomment = new BusinessComment();
        $businesscomment->name = $request->name;
        $businesscomment->email = $request->email;
        $businesscomment->comment = $request->comment;
        $businesscomment->reply = $request->reply;
        $businesscomment->reply_name = $request->reply_name;
        $businesscomment->approve = $request->approve;

        $businesscomment->business()->associate($business);

        $businesscomment->save();

        return redirect()->route('ENP.single-business', $business->id);
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
        $businesscomment = BusinessComment::find($id);
        return view('admin.businesscomments.edit')->with('businesscomment', $businesscomment);
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
        $businesscomment = BusinessComment::find($id);

        $this->validate($request, array(
            'approve' => 'required'
        ));

        $businesscomment->reply = $request->reply;
        $businesscomment->reply_name = $request->reply_name;
        $businesscomment->approve = $request->approve;
        $businesscomment->save();


        return redirect()->route('business.show', $businesscomment->business->id);
    }

        public function delete($id)
         {
            $businesscomment = BusinessComment::find($id);

            return view('admin.businesscomments.delete')->with('businesscomment', $businesscomment);
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $businesscomment = BusinessComment::find($id);
        $business_id = $businesscomment->business->id;
        $businesscomment->delete();

        return redirect()->route('business.show', $business_id);
    }
}
