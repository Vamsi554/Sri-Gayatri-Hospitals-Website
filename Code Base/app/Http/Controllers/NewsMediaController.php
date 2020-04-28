<?php

namespace App\Http\Controllers;

use App\NewsMedia;
use Illuminate\Http\Request;

class NewsMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $newsMedia = NewsMedia::orderBy('created_at', 'ASC')->paginate(12);
      return view('newsMedia', compact('newsMedia'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsMedia  $newsMedia
     * @return \Illuminate\Http\Response
     */
    public function show(NewsMedia $newsMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsMedia  $newsMedia
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsMedia $newsMedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsMedia  $newsMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsMedia $newsMedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsMedia  $newsMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsMedia $newsMedia)
    {
        //
    }
}
