<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Models\User\UserController;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Foundation\Auth;
use App\Http\Controllers\ScorecardController;
use App\Http\Controllers\MusicController;

use App\Http\Controllers\ScoreController;

// Home page route
Route::get('/', [HomeController::class, 'index']);

// Protected routes with middleware
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

// Redirect route
Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/redirected', [HomeController::class, 'redirected']);

Route::get('/view_members', [AdminController::class, 'view_members']);

Route::get('/member_registration', [HomeController::class, 'member_registration']);

Route::get('/see_users', [AdminController::class, 'see_users']);

Route::resource('scorecard', AdminController::class)->except(['show']);

Route::get('scorecard/export-pdf', [AdminController::class, 'exportPDF'])->name('scorecard.export-pdf');

Route::get('/see_scorecard', [AdminController::class, 'see_scorecard']);

Route::post('/add_members', [AdminController::class, 'add_members']);

Route::post('/add_givings', [AdminController::class, 'add_givings']);

Route::get('/time_management', [AdminController::class, 'time_management']);

Route::get('/departments', [AdminController::class, 'departments']);

Route::get('/weekly_schedule', [AdminController::class, 'weekly_schedule']);

Route::get('/first_quoter', [AdminController::class, 'first_quoter']);

Route::get('/update_schedule', [AdminController::class, 'update_schedule']);

Route::get('/view_schedule/{id}', [AdminController::class, 'view_schedule'])->name('view_schedule');

Route::get('/view_event/{id}', [AdminController::class, 'view_event'])->name('view_event');

Route::get('/show_schedule', [AdminController::class, 'view_schedule']);

Route::post('/add_schedule', [AdminController::class, 'add_schedule']);

Route::post('/add_strategicplan', [AdminController::class, 'add_strategicplan']);

Route::post('/add_event', [AdminController::class, 'add_event']);

Route::get('/insert_event', [AdminController::class, 'insert_event']);

Route::get('/insert_schedule', [AdminController::class, 'insert_schedule']);

Route::get('/insert_strategicplan', [AdminController::class, 'insert_strategicplan']);

Route::get('/delete_schedule/{id}', [AdminController::class, 'delete_schedule']);

Route::get('/delete_strategicplan/{id}', [AdminController::class, 'delete_strategicplan']);

Route::get('/view_givings', [AdminController::class, 'view_givings']);

Route::get('/member_givings', [HomeController::class, 'member_givings']);

Route::get('/see_givings', [AdminController::class, 'see_givings']);

Route::get('/see_members', [AdminController::class, 'see_members']);

Route::get('/delete_members/{id}', [AdminController::class, 'delete_members']);

Route::get('/delete_givers/{id}', [AdminController::class, 'delete_givers']);

Route::get('/delete_users/{id}', [AdminController::class, 'delete_users']);

Route::get('/view_inventory', [AdminController::class, 'view_inventory']);

Route::post('/add_inventory', [AdminController::class, 'add_inventory']);

Route::get('/show_inventory', [AdminController::class, 'show_inventory']);

Route::get('/delete_inventory/{id}', [AdminController::class, 'delete_inventory']);

Route::get('/update_member/{id}', [AdminController::class, 'update_member']);

Route::post('/update_registered/{id}', [AdminController::class, 'update_registered']);

Route::get('/update_account', [HomeController::class, 'update_account']);

Route::post('/update_account/{id}', [HomeController::class, 'save_account']);

Route::post('/update_users/{id}', [AdminController::class, 'update_users']);

Route::get('/update_user/{id}', [AdminController::class, 'update_user']);

Route::get('/update_inventory/{id}', [AdminController::class, 'update_inventory']);

Route::post('/update_equipment/{id}', [AdminController::class, 'update_equipment']);

Route::get('/index', [AdminController::class, 'index']);

Route::get('/download_strategic_plan', [AdminController::class, 'downloadStrategicPlan'])->name('download.strategic.plan');

Route::get('/scorecard/details', [AdminController::class, 'details'])->name('scorecard.details');

Route::get('/clear-detail', [AdminController::class, 'clearDetail'])->name('scorecard.clear-detail');

Route::get('/clear-scorecards', [AdminController::class, 'clearScorecards'])->name('scorecard.clear-scorecards');

Route::post('/scorecard/details', [AdminController::class, 'detail'])->name('scorecard.storeDetails');

// Removed duplicate routes that are already handled by the resource route above:
// Route::get('scorecard/{id}/edit', [AdminController::class, 'edit'])->name('scorecard.edit');
// Route::delete('scorecard/{id}', [AdminController::class, 'destroy'])->name('scorecard.destroy');

Route::put('/scorecard/update-detail/{id}', [AdminController::class, 'updateDetails'])->name('scorecard.updateDetail');

Route::resource('strategic_plan', ScoreController::class)->except(['show']);

Route::get('strategic_plan/export-pdf', [ScoreController::class, 'exportPDF'])->name('strategic_plan.export-pdf');

Route::get('/strategic_plan/details', [ScoreController::class, 'details'])->name('strategic_plan.details');

Route::get('/clear-details', [ScoreController::class, 'clearDetails'])->name('strategic_plan.clear-details');

Route::get('/clear-scorecard', [ScoreController::class, 'clearScorecard'])->name('strategic_plan.clear-scorecard');

Route::post('/strategic_plan/details', [ScoreController::class, 'detail'])->name('strategic_plan.storeDetails');

// Removed duplicate routes that are already handled by the strategic_plan resource route above:
// Route::get('strategic_plan/{id}/edit', [ScoreController::class, 'edit'])->name('strategic_plan.edit');
// Route::delete('strategic_plan/{id}', [ScoreController::class, 'destroy'])->name('strategic_plan.destroy');

Route::put('/strategic_plan/update-detail/{id}', [ScoreController::class, 'updateDetails'])->name('strategic_plan.updateDetail');

Route::get('/listen/{filename}', [MusicController::class, 'listen'])->name('listen.music');