<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AWS;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Redirect;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('tblCategory')
            ->select('*')
            ->get();
        $questions = DB::select('SELECT q.strQuestionDesc, c.strCategoryName FROM tblQuestion AS q INNER JOIN tblCategory AS c ON q.intCategoryID = c.intCategoryID');
        return view('addQuestion', ['questions' => $questions, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $destinationPath = 'img/questions'; // upload path
        $extension = $request->file('strQuestionImage')->getClientOriginalExtension(); // getting image extension
        $date = date("Ymdhis");
        $fileName = $date.'-'.rand(111111,999999).'.'.$extension; // renameing image
        $request->file('strQuestionImage')->move($destinationPath, $fileName); // uploading file to given path
        $s3 = AWS::createClient('s3');
        $s3->putObject(array(
            'Bucket'     => 'palad',
            'Key'        => $fileName,
            'SourceFile' => 'img/questions/'.$fileName,
            'ACL'        => 'public-read'
        ));
        $file = $destinationPath.'/'.$fileName;
        unlink($file);

        try {
            DB::beginTransaction();

            DB::table('tblQuestion')->insert([
                'strQuestionDesc' => $request->strQuestionDesc,
                'strAnswer' => $request->strAnswer,
                'intCategoryID' => $request->intCategoryID,
                'strAnswerDesc' => rawurlencode($request->strAnswerDesc),
                'strPicturePath' => $fileName
            ]);

            // Save audio file for this quesiton
            $username = "2d09577f-cf81-402a-a183-56a120c210ca";
            $password = "IcY5NgtiM3oL";
            $url = 'https://stream.watsonplatform.net/text-to-speech/api/v1/synthesize?accept=audio/wav&text='.rawurlencode($request->strAnswerDesc).'.&voice=en-US_AllisonVoice';

            $fp = fopen($fileName.'.flac', "w");                     
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

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
        $request->session()->flash('message', 'Question successfully added.');   
        return Redirect::back();
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
