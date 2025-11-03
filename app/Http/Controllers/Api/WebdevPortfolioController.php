<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\WebdevPortfolios;
use Illuminate\Http\Request;

class WebdevPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return WebdevPortfolios::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data=$request->validate([
            'name'=>'nullable|string',
            'category'=>'nullable|string',
            'image'=>'nullable|string',
        ]);
        $portfolios = WebdevPortfolios::create($data);
        return response()->json($portfolios, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return WebdevPortfolios::findOrFail( $id );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $portfolios = WebdevPortfolios::findOrFail($id);
        $data=request()->validate([
            'name'=>'nullable|string',
            'category'=>'nullable|string',
            'image'=>'nullable|string',
        ]);
        $portfolios->update($data);
        return response()->json($portfolios);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        WebdevPortfolios::destroy( $id );
        return response()->json(null, 204);
    }
}
