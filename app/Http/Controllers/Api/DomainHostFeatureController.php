<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DomainHostFeatures;
use Illuminate\Http\Request;

class DomainHostFeatureController extends Controller
{
     public function index()
    {
        //
        return DomainHostFeatures::all();
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
         $data = $request->validate([
            'title'=>'nullable|string',
            'description'=>'nullable|string',
            'icon'=> 'nullable|string',
            
        ]);

        $features = DomainHostFeatures::create($data);
        return response()->json($features,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
         return DomainHostFeatures::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $features = DomainHostFeatures::findOrFail($id);
        $data = $request->validate([
            'title'=>'nullable|string',
            'description'=>'nullable|string',
            'icon'=> 'nullable|string',
        ]);
        $features->update($data);
        return response()->json($features);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DomainHostFeatures::destroy($id);
        return response()->json(null,204);
    }
}
