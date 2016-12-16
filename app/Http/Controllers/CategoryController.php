<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AWS;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class CategoryController extends Controller
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
        return view('addCategory', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $destinationPath = 'img/categories'; // upload path
        $extension = $request->file('strCategoryImage')->getClientOriginalExtension(); // getting image extension
        $date = date("Ymdhis");
        $fileName = $date.'-'.rand(111111,999999).'.'.$extension; // renameing image
        $request->file('strCategoryImage')->move($destinationPath, $fileName); // uploading file to given path
        $s3 = AWS::createClient('s3');
        $s3->putObject(array(
            'Bucket'     => 'palad',
            'Key'        => 'categories/'.$fileName,
            'SourceFile' => 'img/categories/'.$fileName,
            'ACL'        => 'public-read'
        ));
        $file = $destinationPath.'/'.$fileName;
        unlink($file);

        try {
            DB::beginTransaction();

            DB::table('tblCategory')->insert([
                'strCategoryName' => $request->strCategoryName,
                'strCategoryDesc' => $request->strCategoryDesc,
                'strPicturePath'  => $fileName
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
