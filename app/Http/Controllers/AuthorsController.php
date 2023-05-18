<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use Illuminate\Http\Request;
use DB;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('authors.addauthors');
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
        $Authors = New Authors;
        $Authors->authorname = $request->authorname;
        $Authors->save();
        return redirect('all_authors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function show(Authors $authors)
    {
        $Authors = DB::table('authors')->get();
        //dd($Authors);
        return view('authors.allauthors',compact('Authors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function edit(Authors $authors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Authors $authors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Authors $authors)
    {
        //
    }
}
