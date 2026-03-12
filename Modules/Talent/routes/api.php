<?php

use Illuminate\Support\Facades\Route;
use Modules\Talent\Http\Controllers\TalentController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('talent', TalentController::class)->names('talent');
});
