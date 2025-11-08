<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DomainHostFeatureTitleDesc;
use Illuminate\Http\Request;

class DomainHostFeatureTitleDescController extends Controller
{
     public function index()
    {
        //
        return DomainHostFeatureTitleDesc::all();
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
            
        ]);

        $titleDesc = DomainHostFeatureTitleDesc::create($data);
        return response()->json($titleDesc,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
         return DomainHostFeatureTitleDesc::findOrFail($id);
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
        $titleDesc = DomainHostFeatureTitleDesc::findOrFail($id);
        $data = $request->validate([
            'title'=>'nullable|string',
            'description'=>'nullable|string',
        ]);
        $titleDesc->update($data);
        return response()->json($titleDesc);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DomainHostFeatureTitleDesc::destroy($id);
        return response()->json(null,204);
    }
}
