<?php

use App\Http\Controllers\Api\WebdevHeroController;
use App\Http\Controllers\Api\WebdevPortfolioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PricingPlanController;
use App\Http\Controllers\Api\ExtraServiceController;
use App\Http\Controllers\Api\PlanComparisonController;

// Test route
Route::get('/test', function () {
    return response()->json(['message' => 'API is working!']);
});

// Pricing Plans Routes
Route::get('/pricing-plans', [PricingPlanController::class, 'index']);
Route::post('/pricing-plans', [PricingPlanController::class, 'store']);
Route::get('/pricing-plans/{id}', [PricingPlanController::class, 'show']);
Route::put('/pricing-plans/{id}', [PricingPlanController::class, 'update']);
Route::delete('/pricing-plans/{id}', [PricingPlanController::class, 'destroy']);

// Extra Services Routes
Route::get('/extra-services', [ExtraServiceController::class, 'index']);
Route::post('/extra-services', [ExtraServiceController::class, 'store']);
Route::get('/extra-services/{id}', [ExtraServiceController::class, 'show']);
Route::put('/extra-services/{id}', [ExtraServiceController::class, 'update']);
Route::delete('/extra-services/{id}', [ExtraServiceController::class, 'destroy']);

// Plan Comparisons Routes
Route::get('/plan-comparisons', [PlanComparisonController::class, 'index']);
Route::post('/plan-comparisons', [PlanComparisonController::class, 'store']);
Route::get('/plan-comparisons/{id}', [PlanComparisonController::class, 'show']);
Route::put('/plan-comparisons/{id}', [PlanComparisonController::class, 'update']);
Route::delete('/plan-comparisons/{id}', [PlanComparisonController::class, 'destroy']);

// WebdevHero Routes

Route::get('/web-test', function () {
    return response()->json(['message' => 'Web API is working!']);
});

Route::get('/webdev-hero', [WebdevHeroController::class, 'index']);
Route::post('/webdev-hero', [WebdevHeroController::class, 'store']);
Route::get('/webdev-hero/{id}', [WebdevHeroController::class, 'show']);
Route::put('/webdev-hero/{id}', [WebdevHeroController::class, 'update']);
Route::delete('/webdev-hero/{id}', [WebdevHeroController::class, 'destroy']);

// WebdevPortfolios Routes
Route::get('/webdev-portfolios', [WebdevPortfolioController::class, 'index']);
Route::post('/webdev-portfolios', [WebdevPortfolioController::class, 'store']);
Route::get('/webdev-portfolios/{id}', [WebdevPortfolioController::class, 'shpw']);
Route::put('/webdev-portfolios/{id}', [WebdevPortfolioController::class, 'update']);
Route::delete('/webdev-portfolios/{id}', [WebdevPortfolioController::class, 'destroy']);