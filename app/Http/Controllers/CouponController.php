<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::get();
        return view('coupons.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coupons.create');
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
            'title' => 'required',
            'code' => 'required|unique:coupons',
            'value' => 'required',
        ]);

        $coupon = new Coupon();
        $coupon->title = $request->post('title');
        $coupon->code = $request->post('code');
        $coupon->value = $request->post('value');
        $coupon->save();
        $request->session()->flash('message', 'coupon save successfully!');
        return redirect('coupon');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $coupons = Coupon::find($id);
        return view('coupons.show', compact('coupons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $coupons = Coupon::find($id);
        return view('coupons.edit', compact('coupons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validation to ignore unique while updating
        $request->validate([
            'title' => 'required',
            'code' => 'required|unique:coupons,code,' . $request->id,
            'value' => 'required'
        ]);
        $coupons = Coupon::find($id);
        $coupons->title = $request->post('title');
        $coupons->code = $request->post('code');
        $coupons->value = $request->post('value');
        $coupons->save();

        $request->session()->flash('message', 'Coupon update successfully!');
        return redirect('coupon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $coupons = Coupon::find($id);
        $coupons->delete();
        $request->session()->flash('message', 'coupon Deleted Successfully');
        return redirect('coupon');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request, $status, $id)
    {
        $coupons = Coupon::find($id);
        $coupons->status = $status;
        $coupons->save();
        $request->session()->flash('message', 'Status Updated');
        return redirect('coupon');
    }
}
