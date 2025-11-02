<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\WebdevHero;
use Illuminate\Http\Request;

class WebdevHeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return WebdevHero::all();
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
            'cta1'=>'nullable|string',
            'cta2'=>'nullable|string',
        ]);
        $hero = WebdevHero ::create($data);
        return response()->json($hero,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return WebdevHero::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $hero = WebdevHero::findOrFail($id);
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
        WebdevHero::destroy($id);
        return response()->json(null,204);
    }
}
