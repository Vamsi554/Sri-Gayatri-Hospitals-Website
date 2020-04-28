<?php

namespace App\Http\Controllers;

use App\CaseStudies;
use Illuminate\Http\Request;

class CaseStudiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caseStudies = CaseStudies::orderBy('created_at', 'ASC')->paginate(12);
        return view('caseStudy', compact('caseStudies'));
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
     * @param  \App\CaseStudies  $caseStudies
     * @return \Illuminate\Http\Response
     */
    public function show(CaseStudies $caseStudies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaseStudies  $caseStudies
     * @return \Illuminate\Http\Response
     */
    public function edit(CaseStudies $caseStudies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaseStudies  $caseStudies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaseStudies $caseStudies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaseStudies  $caseStudies
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaseStudies $caseStudies)
    {
        //
    }
}
