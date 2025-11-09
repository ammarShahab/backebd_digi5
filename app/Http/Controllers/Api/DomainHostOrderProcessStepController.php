<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DomainHostOrderProcessStep;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DomainHostOrderProcessStepController extends Controller
{
   public function index(): JsonResponse
    {
        $steps = DomainHostOrderProcessStep::orderBy('order')->get();
        return response()->json($steps);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'step' => 'required|string|max:10',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'order' => 'required|integer',
            'is_active' => 'boolean'
        ]);

        $step = DomainHostOrderProcessStep::create($validated);

        return response()->json([
            'message' => 'ধাপ সফলভাবে যোগ করা হয়েছে',
            'data' => $step
        ], 201);
    }

    public function show(DomainHostOrderProcessStep $orderProcessStep): JsonResponse
    {
        return response()->json($orderProcessStep);
    }

    public function update(Request $request, DomainHostOrderProcessStep $orderProcessStep): JsonResponse
    {
        $validated = $request->validate([
            'step' => 'sometimes|string|max:10',
            'title' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'order' => 'sometimes|integer',
            'is_active' => 'boolean'
        ]);

        $orderProcessStep->update($validated);

        return response()->json([
            'message' => 'ধাপ সফলভাবে আপডেট করা হয়েছে',
            'data' => $orderProcessStep
        ]);
    }

    public function destroy(DomainHostOrderProcessStep $orderProcessStep): JsonResponse
    {
        $orderProcessStep->delete();

        return response()->json([
            'message' => 'ধাপ সফলভাবে মুছে ফেলা হয়েছে'
        ]);
    }
}
