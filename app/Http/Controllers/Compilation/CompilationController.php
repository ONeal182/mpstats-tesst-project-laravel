<?php

namespace App\Http\Controllers\Compilation;

use App\Http\Requests\StoreCompilationRequest;
use App\Http\Requests\UpdateCompilationRequest;
use App\Models\Compilation;
Use App\Http\Controllers\Controller;


class CompilationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }


    public function addView()
    {
        return view('compilationadd');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        CompilationControllerjghgdbbdffd
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompilationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompilationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compilation  $compilation
     * @return \Illuminate\Http\Response
     */
    public function show(Compilation $compilation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compilation  $compilation
     * @return \Illuminate\Http\Response
     */
    public function edit(Compilation $compilation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompilationRequest  $request
     * @param  \App\Models\Compilation  $compilation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompilationRequest $request, Compilation $compilation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compilation  $compilation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compilation $compilation)
    {
        //
    }
}
