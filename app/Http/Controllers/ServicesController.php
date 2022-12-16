<?php

namespace App\Http\Controllers;


use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
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
        return view('backend.services.create');
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
            'title' => 'required|string',
            'description' => 'required|string',
            'icon' => 'required|string',
        ]);

        $services = new Services;
        $services->title = $request->title;
        $services->description = $request->description;
        $services->icon = $request->icon;

        $services->save();

        return redirect()->route('admin.services.create')->with('success','New Services Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $services = Services::all();
        return view('backend.services.list', compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Services::find($id);
        return view('backend.services.edit', compact('service'));
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
            'title' => 'required|string',
            'description' => 'required|string',
            'icon' => 'required|string',
        ]);

        $services =Services::find($id);
        $services->title = $request->title;
        $services->description = $request->description;
        $services->icon = $request->icon;

        $services->save();

        return redirect()->route('admin.services.list')->with('success','Services Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$service = DB::table('services')->where('id',$id)->delete();

        $service = Services::find($id);
        $service->delete();

        return redirect()->route('admin.services.list')->with('success','Services Deleted Successfully');
    }
}
