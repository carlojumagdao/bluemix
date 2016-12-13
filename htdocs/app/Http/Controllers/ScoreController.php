<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $userID = $request->session()->get('userID');
        $eventID = $request->session()->get('eventID');
        $intScore = $request->intScore;

        try {
            DB::beginTransaction();

            DB::table('tblAnswerHeader')->insert([
                'intUserID' => $userID,
                'intEventID' => $eventID,
                'intScore' => $intScore
            ]);

            $countPeople = DB::table('tblAnswerHeader')
                ->where('intEventID', $eventID)
                ->count();

            $eventInfo = DB::table('tblEvent')
                ->select('dblAnswerValue', 'dblConditionalFund')
                ->where('intEventID', $eventID)
                ->first();
            $peopleNeeded = $eventInfo->dblConditionalFund / $eventInfo->dblAnswerValue;

            if ($countPeople == $peopleNeeded){
                DB::table('tblEvent')
                    ->where('intEventID', $eventID)
                    ->update([
                        'blDelete' => 1
                    ]);
            }

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
