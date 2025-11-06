<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\domain_host_package;
use Illuminate\Http\Request;

class DomainHostPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return domain_host_package::all();
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
            'name'=>'nullable|string',
            'price'=>'required|numeric|min:0',
            'duration'=>'nullable|string',
            'popular'=>'nullable|boolean',
            'features'=>'nullable|array',   
            'span' =>'nullable|integer',
        ]);

         $domainHostPackage = domain_host_package::create($data);
        return response()->json($domainHostPackage);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $domainHostPackage = domain_host_package::find($id);
        if (!$domainHostPackage) {
        return  response() -> json(['message' => 'Packeges not found'], 404);
    }
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
         $domainHostPackage = domain_host_package::find($id);
        if (!$domainHostPackage) {
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
        $domainHostPackage->update($data);
        return response()->json($domainHostPackage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $domainHostPackage=domain_host_package::find($id);
        $domainHostPackage->delete();
        return response()->json(['message'=>'Package deleted successfully']);
    }
}
