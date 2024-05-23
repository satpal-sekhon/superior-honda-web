<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userDetails = User::with('addresses')->where('id',Auth::id())->get();
       // dd($userDetails);
        return view('profile.address', compact('userDetails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.add-address');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Address::create([
            'user_id'     => Auth::id(),
            'full_name'   => $request->full_name,
            'mobile_number'   => $request->mobile_no,
            'address'     => $request->address,
            'state'       => $request->state,
            'city'        => $request->city,
            'postal_code' => $request->postal_code,
            'nearby'      => $request->nearby
        ]);

        return redirect()->route('addresses.index')->with('success', 'Address added successfully.'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
