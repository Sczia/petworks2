<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Owner;
use App\Models\service;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owner::all();
        return view('Petworks.admin.owner.index', compact('owners'));
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
        /*  */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $owner = Owner::findOrFail($id);
            $services = Appointment::where('owner_id', '=', $owner->id)->get();
            return view('Petworks.admin.owner.show', compact('owner', 'services'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $appointment = Appointment::findOrFail($id);
            $appointment->comment = $request->input('comment');
            $appointment->save();
            toast()->success('Success', 'You saved changes')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return back();
        } catch (\Throwable $th) {
            toast()->info('Info', 'You did not any save changes')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px'); /* sweet alert dito */
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        //
    }
}
