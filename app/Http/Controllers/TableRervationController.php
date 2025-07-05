<?php

namespace App\Http\Controllers;

use App\Models\TableRervation;
use Illuminate\Http\Request;

class TableRervationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $table = TableRervation::all();
        return view("table-reservations.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TableRervation $tableRervation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TableRervation $tableRervation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TableRervation $tableRervation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TableRervation $tableRervation)
    {
        //
    }
}
