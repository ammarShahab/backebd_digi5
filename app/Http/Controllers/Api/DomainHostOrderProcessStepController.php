<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DomainHostOrderProcessStep;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DomainHostOrderProcessStepController extends Controller
{
   public function index(): JsonResponse
    {
        $steps = DomainHostOrderProcessStep::orderBy('order')->get();
        return response()->json($steps);
    }

    public function store(Request $request): JsonResponse
    {
        Log::info('Store request received', $request->all());
        
        $validated = $request->validate([
            'step' => 'required|string|max:10',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'order' => 'required|integer',
        ]);

        $step = DomainHostOrderProcessStep::create($validated);
        
        Log::info('Step created successfully', $step->toArray());

        return response()->json([
            'message' => 'ধাপ সফলভাবে যোগ করা হয়েছে',
            'data' => $step
        ], 201);
    }

    public function show($id): JsonResponse
    {
        $step = DomainHostOrderProcessStep::findOrFail($id);
        return response()->json($step);
    }

    public function update(Request $request, $id): JsonResponse
    {
        Log::info('Update request for ID: ' . $id, $request->all());
        
        $step = DomainHostOrderProcessStep::findOrFail($id);

        $validated = $request->validate([
            'step' => 'sometimes|string|max:10',
            'title' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'order' => 'sometimes|integer',
        ]);

        $step->update($validated);
        
        Log::info('Step updated successfully', $step->toArray());

        return response()->json([
            'message' => 'ধাপ সফলভাবে আপডেট করা হয়েছে',
            'data' => $step
        ]);
    }

    public function destroy($id): JsonResponse
    {
        Log::info('Delete request for ID: ' . $id);
        
        $step = DomainHostOrderProcessStep::findOrFail($id);
        $step->delete();
        
        Log::info('Step deleted successfully', ['id' => $id]);

        return response()->json([
            'message' => 'ধাপ সফলভাবে মুছে ফেলা হয়েছে'
        ]);
    }
}
