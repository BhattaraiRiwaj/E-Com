<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;


class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes = Size::get();
        return view('sizes.index',compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'size'=>'required'
        ]);

        $sizes = new Size();
        $sizes->size = $request->post('size');
        $sizes->status = 1;
        $sizes->save();
        $request->session()->flash('message','Size save Successfully!');
        return redirect('size');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $sizes = Size::find($id);
        return view('sizes.show',compact('sizes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $sizes = Size::find($id);
        return view('sizes.edit',compact('sizes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'size'=>'required'
        ]);
        $sizes = Size::find($id);
        $sizes->size = $request->post('size');
        $sizes->status = 1;
        $sizes->save();
        $request->session()->flash('message','size update successfully!');
        return redirect('size');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $sizes = Size::find($id);
        $sizes->delete();
        $request->session()->flash('message','size deleted successfully!');
        return redirect('size');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request,$status, $id)
    {
        $sizes = Size::find($id);
        $sizes->status = $status;
        $sizes->save();
        $request->session()->flash('message','size status Changed!');
        return redirect('size');
    }
}
