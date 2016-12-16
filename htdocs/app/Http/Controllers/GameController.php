<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $eventID = $request->session()->get('eventID');

        $questions = DB::table('tblEvent')
            ->join('tblQuestion', 'tblQuestion.intCategoryID', '=', 'tblEvent.intCategoryID')
            ->select('tblQuestion.*')
            ->where('tblEvent.intEventID', $eventID)
            ->get();

        // $request->session()->forget('eventID');

        return response()->json($questions);
    }

    public function setEventID(Request $request){
        $request->session()->put('eventID', Input::get('eventID'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function readanswer(Request $request)
    {
        $value = $request->get('strAnswerDesc');
        $intQuestionID = $request->get('intQuestionID');
        // $value = "Anobanamanyan";
        $username = "2d09577f-cf81-402a-a183-56a120c210ca";
        $password = "IcY5NgtiM3oL";
        $url = 'https://stream.watsonplatform.net/text-to-speech/api/v1/synthesize?accept=audio/wav&text='.$value.'.&voice=en-US_AllisonVoice';
         // $file = fopen('audio-file.flac', 'w');
         // $size = filesize('audio-file.flac');
         // $fildata = fread($file,$size);
         $fp = fopen($intQuestionID.'.flac', "w");                     
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, $url);
         curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

        curl_setopt($ch, CURLOPT_FILE, $fp);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close ($ch);
        return $intQuestionID.".flac";
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
