<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\new_controller;
use App\Http\Controllers\Admin\SitesController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\AccountApiController;
use App\Http\Controllers\Admin\LeftMenusController;
use App\Http\Controllers\Admin\RoleTypesController;
use App\Http\Controllers\Admin\LeadsController;
use App\Http\Controllers\Admin\AccountsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Admin\QuotesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\TicketStatusController;
use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\Admin\ArticleCategoryController;
use App\Http\Controllers\Admin\CompanyTypeController;
use App\Http\Controllers\Admin\EquipmentTypeController;
use App\Http\Controllers\Admin\WorkOrdersController;
use App\Http\Controllers\Admin\EmailTemplateController;
use App\Http\Controllers\Admin\ProductSellPriceController;
use App\Http\Controllers\Admin\ProductManufacturerController;
use App\Http\Controllers\Admin\CommonController;
use App\Http\Controllers\Admin\DashboardController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/insert_data',[new_controller::class,'Insert_data']);
Route::get('/show_data',[new_controller::class,'show']);
Route::get('/edit/{id}',[new_controller::class,'edit_data']);
Route::post('/update',[new_controller::class,'update_data']);
Route::post('/delete/{id}',[new_controller::class,'delete_data']);
Route::post('/Frontend',[new_controller::class,'Frontend_data']);
Route::get('/developer/{data}',[new_controller::class,'developer_data']);