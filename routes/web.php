<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsersController1;
use App\Http\Controllers\UsersController2;
Route::get("/", [UsersController::class, 'index']);
Route::get("create-address-entry", [UsersController::class, 'createAddressEntry']);
Route::get("user-relationship-in-address-model", [UsersController::class, 'userRelationshipInAddressModel']);
Route::get("create-address-entry-second-way", [UsersController::class, 'createAddressEntrySecondWay']);

Route::get("has-many", [UsersController1::class, 'index']);
Route::get("has-many/create-address-entry", [UsersController1::class, 'createAddressEntry']);
Route::get("has-many/create-post", [UsersController1::class, 'createPost']);
Route::get("has-many/display-post", [UsersController1::class, 'displayPost']);
Route::get("has-many/display-user-post", [UsersController1::class, 'displayUserPost']);

Route::get("many-to-many/create-tag", [UsersController2::class, 'createTag']);
Route::get("many-to-many/attach-tag-to-post", [UsersController2::class, 'attachTagToPost']);
Route::get("many-to-many/display-post", [UsersController2::class, 'displayPost']);
Route::get("many-to-many/detach-tag-from-post", [UsersController2::class, 'detachTagFromPost']);

Route::get("many-to-many/get-tags", [UsersController2::class, 'getTags']);
/*Route::get('/', function () {
    return view('welcome');
});*/