<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Public API Routes
Route::get("/company", [ApiController::class, "company"]);
Route::get("/date", [ApiController::class, "date"]);
Route::get("/latest-articles", [ApiController::class, "latest_articles"]);
Route::get("/trending-articles", [ApiController::class, "trending_articles"]);
Route::get("/categories", [ApiController::class, "categories"]);
Route::get("/article/{id}", [ApiController::class, "article"]);
// Correct dynamic route
Route::middleware("auth:sanctum")->group(function(){
Route::post("/category", [ApiController::class, "category"])->middleware("auth:sanctum");
Route::patch("/category/{id}", [ApiController::class, "category_edit"])->middleware("auth:sanctum");
Route::delete("/category/{id}", [ApiController::class, "category_delete"])->middleware("auth:sanctum"); 
});
 // POST method for updating category
Route::post("/register", [AuthController::class, "register"]);
Route::post("/login", [AuthController::class, "login"]);
