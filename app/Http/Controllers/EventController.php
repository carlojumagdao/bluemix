<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = DB::table('tblEvent')
            ->join('tblCategory', 'tblCategory.intCategoryID', '=', 'tblEvent.intCategoryID')
            ->select('tblEvent.*', 'tblCategory.strCategoryName')
            ->orderBy('tblEvent.TIMESTAMP', 'desc')
            ->first();
        $intPersonTake = DB::table('tblEvent')
            ->where('intEventID', $events->intEventID)
            ->count();

        $events->progress = (string) 100 * ($intPersonTake / ($events->dblConditionalFund / $events->dblAnswerValue));
        return response()->json($events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home(){
        $categories = DB::table('tblCategory')
            ->select('*')
            ->get();
        $events = DB::select('SELECT e.strEventShortDesc, e.dblFund,e.dblConditionalFund, c.strCategoryName FROM tblEvent AS e INNER JOIN tblCategory AS c ON e.intCategoryID = c.intCategoryID');
        return view('addEvent', ['events' => $events, 'categories' => $categories]);
    }

    public function create(Request $request)
    {
        $destinationPath = 'img/events'; // upload path
        $extension = $request->file('strEventImage')->getClientOriginalExtension(); // getting image extension
        $date = date("Ymdhis");
        $fileName = $date.'-'.rand(111111,999999).'.'.$extension; // renameing image
        $request->file('strEventImage')->move($destinationPath, $fileName); // uploading file to given path
        $s3 = AWS::createClient('s3');
        $s3->putObject(array(
            'Bucket'     => 'palad',
            'Key'        => $fileName,
            'SourceFile' => 'img/events/'.$fileName,
            'ACL'        => 'public-read'
        ));
        $file = $destinationPath.'/'.$fileName;
        unlink($file);
        try {
            DB::beginTransaction();

            DB::table('tblEvent')->insert([
                'strEventShortDesc' => $request->strEventName,
                'strEventLongDesc' => $request->strEventDesc,
                'strLocation' => $request->strLocation,
                'dblFund' => $request->dblFund,
                'dblConditionalFund' => $request->dblConditionalFund,
                'dblAnswerValue' => $request->dblAnswerValue,
                'intCategoryID' => $request->intCategoryID,
                'strPicturePath' => $fileName
            ]);
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
