<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->session()->has('userID')){
            $userID = $request->session()->get('userID');

            $userInformation = DB::table('tblUser')
                ->select('strFirstName', 'strLastName', 'strEmail')
                ->where('intUserID', $userID)
                ->first();

            $userInformation->dblDonation = DB::table('tblUser')
                ->join('tblAnswerHeader', 'tblUser.intUserID', '=', 'tblAnswerHeader.intUserID')
                ->join('tblEvent', 'tblAnswerHeader.intEventID', '=', 'tblEvent.intEventID')
                ->sum('tblEvent.dblAnswerValue');

            return response()->json($userInformation);
        }else{
            return response()->json(false);
        }

            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        try{
            DB::beginTransaction();

            DB::table('tblUser')->insert([
                'strFirstname' => $request->strFirstName,
                'strLastname' => $request->strLastName,
                'strUsername' => $request->strUsername,
                'strPassword' => $request->strPassword,
                'strEmail' => $request->strEmail,
                'blSex' => $request->blSex
            ]);


            DB::commit();
        }catch(Exception $e){
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
