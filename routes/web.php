<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApproachStepController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/health', function () {
    return 'OK';
});

// ✅ Protect admin routes with auth + admin gate
Route::middleware(['auth', 'can:admin'])->group(function () {
    Route::get('/admin/approach-steps/{id}/edit', [ApproachStepController::class, 'edit'])
        ->name('admin.approach-steps.edit');
});
