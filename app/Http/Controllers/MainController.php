<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function main()
    {
        $main = Main::first();
        return view('backend.main.main', compact('main'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|string',
            'sub_title' => 'required|string',
        ]);

        $main = Main::first();
        $main->title = $request->title;
        $main->sub_title = $request->sub_title;

        if ($request->file('bg_img')) {
            $img_file =  $request->file('bg_img');
            $img_file->storeAs('public/img/','bg_img.'. $img_file->getClientOriginalExtension());
            $main->bg_img = 'storage/img/bg_img.' . $img_file->getClientOriginalExtension();
        }

        if ($request->file('resume')) {
            $pdf_file =  $request->file('resume');
            $pdf_file->storeAs('public/pdf/','resume.'. $pdf_file->getClientOriginalExtension());
            $main->resume = 'storage/pdf/resume.' . $pdf_file->getClientOriginalExtension();
        }

        $main->save();

        return redirect()->route('admin.main')->with('success',"Main Page Has Been Updated Successfully! ");
    }

}
