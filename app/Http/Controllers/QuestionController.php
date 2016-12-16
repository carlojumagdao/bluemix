<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class QuestionController extends Controller
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

        $destinationPath = 'img/questions'; // upload path
        $extension = $request->file('pic')->getClientOriginalExtension(); // getting image extension
        $date = date("Ymdhis");
        $fileName = $date.'-'.rand(111111,999999).'.'.$extension; // renameing image
        $request->file('strQuestionImage')->move($destinationPath, $fileName); // uploading file to given path
        $s3 = AWS::createClient('s3');
        $s3->putObject(array(
            'Bucket'     => 'palad',
            'Key'        => $fileName,
            'SourceFile' => 'assets/images/uploads/'.$fileName,
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
                'strAnswerDesc' => $request->strAnswerDesc,
                'strPicPath' => $fileName
            ]);
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
        // this->createaudiofile($fileName);      
    }

    function createaudiofile(String $strFileName){
        echo $strFileName;
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
