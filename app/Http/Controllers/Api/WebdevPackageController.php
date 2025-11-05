<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\WebdevPackages;
use Illuminate\Http\Request;

class WebdevPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return WebdevPackages::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name'=>'nullable|string',
            'price'=>'required|numeric|min:0',
            'duration'=>'nullable|string',
            'popular'=>'nullable|boolean',
            'features'=>'nullable|array',   
            'span' =>'nullable|integer',
        ]);

        $webdevPackages = WebdevPackages::create($data);
        return response()->json($webdevPackages);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $webdevPackages = WebdevPackages::find($id);
        if (!$webdevPackages) {
        return  response() -> json(['message' => 'Packeges not found'], 404);
    }

    }   
        

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $webdevPackages = WebdevPackages::find($id);
        if (!$webdevPackages) {
            return response()->json(['message' => 'Packeges not found'], 404);
        }
        $data = $request->validate([
            'name'=>'nullable|string',
            'price'=>'nullable|numeric|string',
            'duration'=>'nullable|string',
            'popular'=>'nullable|boolean',
            'features'=>'nullable|array',   
            'span' =>'nullable|integer',
        ]);

       /*  if (isset($data['features'])) {
            $data['features']=json_encode($data['features']);
        } */
        $webdevPackages->update($data);
        return response()->json($webdevPackages);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $webdevPackages=WebdevPackages::find($id);
        $webdevPackages->delete();
        return response()->json(['message'=>'Package deleted successfully']);

    }

}