<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
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
    public function create()
    {
        return view('backend.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title1' => 'required|string',
            'title2' => 'required|string',
            'image' => 'required|image',
            'description' => 'required|string',
        ]);

        $abouts = new About;
        $abouts->title1 = $request->title1;
        $abouts->title2 = $request->title2;
        $abouts->description = $request->description;

        $image = $request->file('image');
        Storage::putFile('public/img/', $image);
        $abouts->image = "storage/img/" . $image->hashName();

        $abouts->save();

        return redirect()->route('admin.about.create')->with('success','New About Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $abouts = About::all();
        return view('backend.about.list', compact('abouts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abouts = About::find($id);
        return view('backend.about.edit', compact('abouts'));
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

        $this->validate($request, [
            'title1' => 'required|string',
            'title2' => 'required|string',
            'description' => 'required|string',

        ]);

        $abouts = About::find($id);
        $abouts->title1 = $request->title1;
        $abouts->title2 = $request->title2;
        $abouts->description = $request->description;

        if($request->file('image')){
            $image = $request->file('image');
        Storage::putFile('public/img/', $image);
        $abouts->image = "storage/img/" . $image->hashName();
        }



        $abouts->save();

        return redirect()->route('admin.about.list')->with('success','About Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$portfolio = DB::table('portfolios')->where('id',$id)->delete();

        $about = About::find($id);
        @unlink(public_path($about->image));
        $about->delete();


        return redirect()->route('admin.about.list')->with('success','About Deleted Successfully');
    }
}