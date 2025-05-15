<?php

namespace App\Http\Controllers;

use App\Models\Contains;
use Illuminate\Http\Request;

class ContainsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.contains');
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
    public function show(Contains $contains)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contains $contains)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contains $contains)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contains $contains)
    {
        //
    }
}
