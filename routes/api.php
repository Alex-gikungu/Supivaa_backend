<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TeamMemberController;
use App\Http\Controllers\API\ApproachStepController;
use App\Http\Controllers\API\CTASectionController;
use App\Http\Controllers\API\InsightController;
use App\Http\Controllers\API\PartnerController;
use App\Http\Controllers\API\ValueController;
use App\Http\Controllers\API\AboutController;
use App\Http\Controllers\API\HomeSectionController;
use App\Models\WhatWeDoSection;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// 🔹 Public API endpoints
Route::get('/team-members', [TeamMemberController::class, 'index']);
Route::get('/team-members/{id}', [TeamMemberController::class, 'show']);

Route::get('/approach-steps', [ApproachStepController::class, 'index']);
Route::get('/cta-sections', [CTASectionController::class, 'index']);

Route::get('/insights', [InsightController::class, 'index']);
Route::get('/insights/{id}', [InsightController::class, 'show']);

Route::get('/partners', [PartnerController::class, 'index']);
Route::get('/partners/{id}', [PartnerController::class, 'show']);
Route::get('/partnership-stories', [PartnerController::class, 'stories']);
Route::get('/trusted-partners', [PartnerController::class, 'logos']);

Route::get('/values', [ValueController::class, 'index']);

// 🔹 About Section (public view)
Route::get('/about', [AboutController::class, 'index']);

// 🔹 Home Section (public view)
Route::get('/home', [HomeSectionController::class, 'index']);

// 🔹 Admin-only CRUD routes
Route::middleware(['auth:sanctum', 'is_admin'])->group(function () {
    // About Section
    Route::post('/about', [AboutController::class, 'store']);
    Route::put('/about/{id}', [AboutController::class, 'update']);
    Route::delete('/about/{id}', [AboutController::class, 'destroy']);

    // Team Members
    Route::post('/team-members', [TeamMemberController::class, 'store']);
    Route::put('/team-members/{id}', [TeamMemberController::class, 'update']);
    Route::delete('/team-members/{id}', [TeamMemberController::class, 'destroy']);

    // Insights
    Route::post('/insights', [InsightController::class, 'store']);
    Route::put('/insights/{id}', [InsightController::class, 'update']);
    Route::delete('/insights/{id}', [InsightController::class, 'destroy']);

    // Partners
    Route::post('/partners', [PartnerController::class, 'store']);
    Route::put('/partners/{id}', [PartnerController::class, 'update']);
    Route::delete('/partners/{id}', [PartnerController::class, 'destroy']);

    // Values
    Route::post('/values', [ValueController::class, 'store']);
    Route::put('/values/{id}', [ValueController::class, 'update']);
    Route::delete('/values/{id}', [ValueController::class, 'destroy']);

    // Approach Steps
    Route::post('/approach-steps', [ApproachStepController::class, 'store']);
    Route::put('/approach-steps/{id}', [ApproachStepController::class, 'update']);
    Route::delete('/approach-steps/{id}', [ApproachStepController::class, 'destroy']);

    // CTA Sections
    Route::post('/cta-sections', [CTASectionController::class, 'store']);
    Route::put('/cta-sections/{id}', [CTASectionController::class, 'update']);
    Route::delete('/cta-sections/{id}', [CTASectionController::class, 'destroy']);

    // Home Section (admin CRUD)
    Route::post('/home', [HomeSectionController::class, 'store']);
    Route::put('/home/{id}', [HomeSectionController::class, 'update']);
    Route::delete('/home/{id}', [HomeSectionController::class, 'destroy']);
});

// 🔹 What We Do Section endpoint
Route::get('/what-we-do', function () {
    $section = WhatWeDoSection::first();

    if (!$section) {
        return response()->json(['error' => 'No WhatWeDoSection found'], 404);
    }

    $data = $section->toArray();

    if (!empty($data['whatwedo_image']) && is_string($data['whatwedo_image'])) {
        $data['whatwedo_image'] = url($data['whatwedo_image']);
    }

    if (!empty($data['different_image']) && is_string($data['different_image'])) {
        $data['different_image'] = url($data['different_image']);
    }

    $cards = [];

    if (!empty($data['serve_cards'])) {
        $cards = is_string($data['serve_cards'])
            ? json_decode($data['serve_cards'], true)
            : $data['serve_cards'];

        if (is_array($cards)) {
            $cards = array_map(function ($card) {
                if (isset($card['icon']) && is_string($card['icon']) && !empty($card['icon'])) {
                    $card['icon'] = url($card['icon']);
                }
                return $card;
            }, $cards);
        }
    }

    $data['serve_cards'] = $cards;

    return response()->json($data);
});
