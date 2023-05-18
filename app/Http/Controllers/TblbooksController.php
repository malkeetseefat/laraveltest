<?php

namespace App\Http\Controllers;

use App\Models\tblbooks;
use Illuminate\Http\Request;
use DB;

class TblbooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Authors = DB::table('authors')->get();
        return view('books.addbooks',compact('Authors'));
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
        $tblbooks = New tblbooks;
        $tblbooks->user_id = $request->user_id;
        $tblbooks->book_name = $request->book_name;
        $tblbooks->author_name = $request->author_name;
        $tblbooks->published_date = $request->published_date;
        $tblbooks->save();
        return redirect('all_books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tblbooks  $tblbooks
     * @return \Illuminate\Http\Response
     */
    public function show(tblbooks $tblbooks)
    {
        $tblbooks = DB::table('tblbooks')->get();
        return view('books.allbooks',compact('tblbooks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tblbooks  $tblbooks
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Authors = DB::table('authors')->get();
        $tblbooks = tblbooks::where('id', $id)->first();
        return view('books.editbooks',compact('tblbooks'),compact('Authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tblbooks  $tblbooks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tblbooks $tblbooks)
    {
        $query = tblbooks::where('id',$request->table_id)->first();
        $query->book_name = $request->book_name;
        $query->author_name = $request->author_name;
        $query->published_date = $request->published_date;
        $query->save();
        return redirect('all_books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tblbooks  $tblbooks
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tblbooks::where('id', $id)->delete();
        return redirect('all_books');
    }
}
