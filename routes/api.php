<?php

use App\Http\Controllers\Api\DomainHostFeatureController;
use App\Http\Controllers\Api\DomainHostFeatureTitleDescController;
use App\Http\Controllers\Api\DomainHostHeroController;
use App\Http\Controllers\Api\DomainHostPackageController;
use App\Http\Controllers\Api\WebdevHeroController;
use App\Http\Controllers\Api\WebdevPackageController;
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
Route::get('/webdev-portfolios/{id}', [WebdevPortfolioController::class, 'show']);
Route::put('/webdev-portfolios/{id}', [WebdevPortfolioController::class, 'update']);
Route::delete('/webdev-portfolios/{id}', [WebdevPortfolioController::class, 'destroy']);

// WebdevPackage Routes
Route::get('/webdev-packages', [WebdevPackageController::class, 'index']);
Route::post('/webdev-packages', [WebdevPackageController::class,'store']);
Route::get('/webdev-packages/{id}',[WebdevPackageController::class, 'show']);
Route::put('/webdev-packages/{id}', [WebdevPackageController::class, 'update']);
Route::delete('/webdev-packages/{id}',[WebdevPackageController::class, 'destroy']);

// Domain Hosting Hero Routes
Route::get('/domain-host-hero', [DomainHostHeroController::class, 'index']);
Route::post('/domain-host-hero', [DomainHostHeroController::class, 'store']);
Route::get('/domain-host-hero/{id}', [DomainHostHeroController::class, 'show']);
Route::put('/domain-host-hero/{id}', [DomainHostHeroController::class, 'update']);
Route::delete('/domain-host-hero/{id}', [DomainHostHeroController::class, 'destroy']);

// Domain Hosting Service Feature Title Desc Routes
Route::get('/domain-host-features-titledesc', [DomainHostFeatureTitleDescController::class, 'index']);
Route::post('/domain-host-features-titledesc', [DomainHostFeatureTitleDescController::class, 'store']);
Route::get('/domain-host-features-titledesc/{id}',[DomainHostFeatureTitleDescController::class, 'show']);
Route::put('/domain-host-features-titledesc/{id}', [DomainHostFeatureTitleDescController::class, 'update']);
Route::delete('/domain-host-features-titledesc/{id}', [DomainHostFeatureTitleDescController::class, 'destroy']);


// Domain Hosting Service Feature Routes
Route::get('/domain-host-features', [DomainHostFeatureController::class, 'index']);
Route::post('/domain-host-features', [DomainHostFeatureController::class, 'store']);
Route::get('/domain-host-features/{id}',[DomainHostFeatureController::class, 'show']);
Route::put('/domain-host-features/{id}', [DomainHostFeatureController::class, 'update']);
Route::delete('/domain-host-features/{id}', [DomainHostFeatureController::class, 'destroy']);


// Domain Hosting Package Routes
Route::get('/domain-host-packages', [DomainHostPackageController::class, 'index']);
Route::post('/domain-host-packages', [DomainHostPackageController::class,'store']);
Route::get('/domain-host-packages/{id}',[DomainHostPackageController::class, 'show']);
Route::put('/domain-host-packages/{id}', [DomainHostPackageController::class, 'update']);
Route::delete('/domain-host-packages/{id}',[DomainHostPackageController::class, 'destroy']);