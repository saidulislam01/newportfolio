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

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'title' => 'required|string',
    //         'sub_title' => 'required|string',
    //         'image' => 'required|image',
    //         'thumbnail' => 'required|image',
    //         'description' => 'required|string',
    //         'client' => 'required|string',
    //         'category' => 'required|string',

    //     ]);

    //     $portfolios = new Portfolio;
    //     $portfolios->title = $request->title;
    //     $portfolios->sub_title = $request->sub_title;
    //     $portfolios->description = $request->description;
    //     $portfolios->client = $request->client;
    //     $portfolios->category = $request->category;

    //     $image = $request->file('image');
    //     Storage::putfile('public/img/', $image);
    //     $portfolios->image = "storage/img/" . $image->hashName();

    //     $thumbnail = $request->file('thumbnail');
    //     Storage::putfile('public/img/', $thumbnail);
    //     $portfolios->thumbnail = "storage/img/" . $thumbnail->hashName();

    //     $portfolios->save();

    //     return redirect()->route('admin.portfolios.create')->with('success','New Portfolios Created Successfully');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show()
    // {
    //     $portfolios = Portfolio::all();
    //     return view('backend.portfolios.list', compact('portfolios'));
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     $portfolios = Portfolio::find($id);
    //     return view('backend.portfolios.edit', compact('portfolios'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {

    //     $this->validate($request, [
    //         'title' => 'required|string',
    //         'sub_title' => 'required|string',
    //         'description' => 'required|string',
    //         'client' => 'required|string',
    //         'category' => 'required|string',

    //     ]);

    //     $portfolios = Portfolio::find($id);
    //     $portfolios->title = $request->title;
    //     $portfolios->sub_title = $request->sub_title;
    //     $portfolios->description = $request->description;
    //     $portfolios->client = $request->client;
    //     $portfolios->category = $request->category;

    //     if($request->file('image')){
    //         $image = $request->file('image');
    //     Storage::putfile('public/img/', $image);
    //     $portfolios->image = "storage/img/" . $image->hashName();
    //     }

    //     if($request->file('thumbnail')){
    //         $thumbnail = $request->file('thumbnail');
    //     Storage::putfile('public/img/', $thumbnail);
    //     $portfolios->thumbnail = "storage/img/" . $thumbnail->hashName();
    //     }


    //     $portfolios->save();

    //     return redirect()->route('admin.portfolios.list')->with('success','Portfolios Updated Successfully');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //$portfolio = DB::table('portfolios')->where('id',$id)->delete();

    //     $portfolios = Portfolio::find($id);
    //     @unlink(public_path($portfolios->image));
    //     @unlink(public_path($portfolios->thumbnail));
    //     $portfolios->delete();


    //     return redirect()->route('admin.portfolios.list')->with('success','Portfolios Deleted Successfully');
    // }
}