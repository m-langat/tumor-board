<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCancerRequest;
use App\Http\Requests\UpdateCancerRequest;
use App\Models\Cancer;

class CancerController extends Controller
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
     * @param  \App\Http\Requests\StoreCancerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCancerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cancer  $cancer
     * @return \Illuminate\Http\Response
     */
    public function show(Cancer $cancer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cancer  $cancer
     * @return \Illuminate\Http\Response
     */
    public function edit(Cancer $cancer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCancerRequest  $request
     * @param  \App\Models\Cancer  $cancer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCancerRequest $request, Cancer $cancer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cancer  $cancer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cancer $cancer)
    {
        //
    }
}
