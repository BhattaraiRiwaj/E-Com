<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = Color::get();
        return view('colors.index',compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('colors.create');
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
            'color'=>'required|unique:colors'
        ]);

        $colors = new Color();
        $colors->color = $request->post('color');
        $colors->status = 1;
        $colors->save();

        $request->session()->flash('message','Color saved successfully!');
        return redirect('color');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $colors = Color::find($id);
        return view('colors.show',compact('colors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $colors = Color::find($id);
        return view('colors.edit',compact('colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'color'=>'required|unique:colors,color,' .$request->id
        ]);

        $colors = Color::find($id);
        $colors->color = $request->post('color');
        $colors->status = 1;
        $colors->save();

        $request->session()->flash('message','Color updated!');
        return redirect('color');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $colors = Color::find($id);
        $colors->delete();

        $request->session()->flash('message','Colors Deleted!');
        return redirect('color');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request,$status,$id)
    {
        $colors = Color::find($id);
        $colors->status = $status;
        $colors->save();

        $request->session()->flash('message','Status Updated!');
        return redirect('color');
    }
}
