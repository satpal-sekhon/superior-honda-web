<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inquiries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Inquiry::create([
            'name'          => $request->name,
            'date'          => $request->date,
            'mileage'       => $request->mileage,
            'vehicle'       => $request->vehicle,
            'year'          => $request->year,
            'lic_no'        => $request->lic_no,
            'address'       => $request->address,
            'returning'     => $request->returning,
            'color'         => $request->color,
            'tel_digicel'   => $request->tel_digicel,
            'tel_lime'      => $request->tel_lime,
            'dob'           => $request->dob,
            'chassis'       => $request->chassis,
            'engine'        => $request->engine,
            'conditions'    => json_encode($request->condition),
            'sign'          => $request->signature,
            'sign_date'     =>  $request->sign_date
        ]);

        return redirect()->route('inquiries.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inquiry $inquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inquiry $inquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inquiry $inquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inquiry $inquiry)
    {
        //
    }
}
