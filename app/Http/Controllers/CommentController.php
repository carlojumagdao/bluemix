<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventID = Input::get('eventID');
        $comments = DB::table('tblComment')
            ->join('tblUser', 'tblUser.intUserID', '=', 'tblComment.intUserID')
            ->select('tblComment.strComment', 'tblUser.strFirstname', 'tblUser.strLastname', 'tblUser.strUsername')
            ->where('tblcomment.intEventID', $eventID)
            ->orderBy('tblComment.TIMESTAMP', 'desc')
            ->get();

        return response()->json($comments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {
            DB::beginTransaction();

            DB::table('tblComment')->insert([
                'intUserID' => $request->session()->get('userID'),
                'intEventID' => $request->intEventID,
                'strComment' => $request->strComment
            ]);

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
