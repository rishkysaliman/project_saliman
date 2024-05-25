<?php

namespace App\Http\Controllers;

use App\Models\ktp;
use App\Http\Requests\StorektpRequest;
use App\Http\Requests\UpdatektpRequest;

class KtpController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorektpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorektpRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function show(ktp $ktp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function edit(ktp $ktp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatektpRequest  $request
     * @param  \App\Models\ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatektpRequest $request, ktp $ktp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function destroy(ktp $ktp)
    {
        //
    }
}
