<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\TeamOfExpert;
use Illuminate\Http\Request;

class TeamOfExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experts = TeamOfExpert::all();
        $count_projects = count(Portfolio::all());
        $count_experts = count(TeamOfExpert::all());

        return view('components.pages.about', compact('experts', 'count_projects', 'count_experts'));
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
     * @param  \App\Models\TeamOfExpert  $teamOfExpert
     * @return \Illuminate\Http\Response
     */
    public function show(TeamOfExpert $teamOfExpert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamOfExpert  $teamOfExpert
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamOfExpert $teamOfExpert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeamOfExpert  $teamOfExpert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamOfExpert $teamOfExpert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamOfExpert  $teamOfExpert
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamOfExpert $teamOfExpert)
    {
        //
    }
}
