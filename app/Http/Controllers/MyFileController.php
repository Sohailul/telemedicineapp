<?php

namespace App\Http\Controllers;

use App\MyFile;
use PDF;
use Illuminate\Http\Request;

class MyFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myfiles = MyFile::all();
     return view('admin.pages.my-files', compact('myfiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $myfile = new MyFile;

        $myfile->file_name = $request->file_name;
        $myfile->name = $request->name;
        $myfile->email = $request->email;

        $myfile->save();

        return redirect()->route('my-files.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MyFile  $myFile
     * @return \Illuminate\Http\Response
     */
    public function show(MyFile $myFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MyFile  $myFile
     * @return \Illuminate\Http\Response
     */
    public function edit(MyFile $myFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MyFile  $myFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyFile $myFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MyFile  $myFile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MyFile::where('id',$id)->delete();
        return redirect()->back();
    }

    public function pdfgenerate($id)
    {
        $myfile = MyFile::find($id);
        $pdf = PDF::loadView('admin.download',compact('myfile'));
        return $pdf->stream('my_file.pdf');
    }
}
