<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguagesController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $language=new Language;
        $language->language=$request->language;
        $language->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Language  $Language
     * @return \Illuminate\Http\Response
     */
    public function show(Language $Language)
    {
        //


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Language  $Language
     * @return \Illuminate\Http\Response
     */
    public function edit(Language $Language)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Language  $Language
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Language $Language)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Language  $Language
     * @return \Illuminate\Http\Response
     */
    public function destroy(Language $Language)
    {
        //
    }
}