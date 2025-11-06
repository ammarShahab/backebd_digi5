<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\domain_host_heroes;
use Illuminate\Http\Request;

class DomainHostHeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return domain_host_heroes::all();
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
            'image'=>'nullable|string',
            
        ]);
        $hero = domain_host_heroes::create($data);
        return response()->json($hero,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
         return domain_host_heroes::findOrFail($id);
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
         $hero = domain_host_heroes::findOrFail($id);
        $data = $request->validate([
            'title'=>'nullable|string',
            'description'=>'nullable|string',
            'image'=>'nullable|string',
            'cta1'=>'nullable|string',
            'cta2'=>'nullable|string',
        ]);
        $hero->update($data);
        return response()->json($hero);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        domain_host_heroes::destroy($id);
        return response()->json(null,204);
    }
}
