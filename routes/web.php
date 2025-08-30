<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ScorecardController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\UpdateUserProfileInformationController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrayerController;

// --------------------
// Public Routes
// --------------------

// Homepage
Route::get('/', [HomeController::class, 'index']);

// Member Registration
Route::get('/member_registration', [HomeController::class, 'member_registration'])->name('member_registration');
Route::post('/add_members', [AdminController::class, 'add_members'])->name('add_members');

// Informational Pages
Route::get('/what-to-expect', [HomeController::class, 'whatToExpect'])->name('what-to-expect');
Route::get('/who-we-are', [HomeController::class, 'whoWeAre'])->name('who-we-are');
Route::get('/our-beliefs', [HomeController::class, 'ourBeliefs'])->name('our-beliefs');
Route::get('/attend-online', [HomeController::class, 'attendOnline'])->name('attend-online');
Route::get('/give-god', [HomeController::class, 'giveGod'])->name('give-god');
Route::get('/connect-with-our-team', [HomeController::class, 'connectWithOurTeam'])->name('connect-with-our-team');
Route::get('/prayer-request', [HomeController::class, 'prayerRequest'])->name('prayer-request');

// Contact Us (Public Form)
Route::get('/contact-us', [ContactController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-us', [ContactController::class, 'submitContactForm'])->name('contact.submit');

// Prayer (Public Form, similar to Contact Us)


// Locations
Route::get('/locations', [LocationController::class, 'index'])->name('locations.index');
Route::get('/locations/{slug}', [LocationController::class, 'show'])->name('locations.show');


// --------------------
// Protected Routes (Authenticated & Verified)
// --------------------
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // User Profile
    Route::put('/user/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('user-profile-information.update');
    Route::delete('/user/profile-photo', [App\Http\Controllers\ProfilePhotoController::class, 'destroy'])->name('profile-photo.remove');

    // Admin Dashboard / Member Management
    Route::get('/redirect', [HomeController::class, 'redirect']);
    Route::get('/redirected', [HomeController::class, 'redirected']);
    Route::get('/view_members', [AdminController::class, 'view_members']);
    Route::get('/see_users', [AdminController::class, 'see_users']);

    // Scorecard
    Route::resource('scorecard', AdminController::class)->except(['show']);
    Route::get('scorecard/export-pdf', [AdminController::class, 'exportPDF'])->name('scorecard.export-pdf');
    Route::get('/see_scorecard', [AdminController::class, 'see_scorecard']);

    // Inventory
    Route::get('/view_inventory', [AdminController::class, 'view_inventory']);
    Route::post('/add_inventory', [AdminController::class, 'add_inventory']);
    Route::get('/show_inventory', [AdminController::class, 'show_inventory']);
    Route::get('/delete_inventory/{id}', [AdminController::class, 'delete_inventory']);
    Route::get('/update_inventory/{id}', [AdminController::class, 'update_inventory']);
    Route::post('/update_equipment/{id}', [AdminController::class, 'update_equipment']);

    // Givings
    Route::post('/add_givings', [AdminController::class, 'add_givings']);
    Route::get('/view_givings', [AdminController::class, 'view_givings']);
    Route::get('/member_givings', [HomeController::class, 'member_givings']);
    Route::get('/see_givings', [AdminController::class, 'see_givings']);

    // Member Updates / Deletes
    Route::get('/update_member/{id}', [AdminController::class, 'update_member']);
    Route::post('/update_registered/{id}', [AdminController::class, 'update_registered']);
    Route::delete('/delete_certificate/{id}', [AdminController::class, 'deleteCertificate']);
    Route::get('/update_account', [HomeController::class, 'update_account']);
    Route::post('/update_account/{id}', [HomeController::class, 'save_account']);
    Route::post('/update_users/{id}', [AdminController::class, 'update_users']);
    Route::get('/update_user/{id}', [AdminController::class, 'update_user']);
    Route::get('/delete_members/{id}', [AdminController::class, 'delete_members']);
    Route::get('/delete_givers/{id}', [AdminController::class, 'delete_givers']);
    Route::get('/delete_users/{id}', [AdminController::class, 'delete_users']);

    // Schedule / Events / Strategic Plan
    Route::get('/time_management', [AdminController::class, 'time_management']);
    Route::get('/departments', [AdminController::class, 'departments']);
    Route::get('/weekly_schedule', [AdminController::class, 'weekly_schedule']);
    Route::get('/first_quoter', [AdminController::class, 'first_quoter']);
    Route::get('/update_schedule', [AdminController::class, 'update_schedule']);

    Route::get('/view_schedule/{id}', [AdminController::class, 'view_schedule'])->name('view_schedule');
    Route::get('/view_event/{id}', [AdminController::class, 'view_event'])->name('view_event');

    Route::post('/add_schedule', [AdminController::class, 'add_schedule']);
    Route::post('/add_strategicplan', [AdminController::class, 'add_strategicplan']);
    Route::post('/add_event', [AdminController::class, 'add_event']);

    Route::get('/insert_event', [AdminController::class, 'insert_event']);
    Route::get('/insert_schedule', [AdminController::class, 'insert_schedule']);
    Route::get('/insert_strategicplan', [AdminController::class, 'insert_strategicplan']);

    Route::get('/delete_schedule/{id}', [AdminController::class, 'delete_schedule']);
    Route::get('/delete_strategicplan/{id}', [AdminController::class, 'delete_strategicplan']);

    // Music
    Route::get('/listen/{filename}', [MusicController::class, 'listen'])->name('listen.music');

    // Notes routes
    Route::get('/notes', [NoteController::class, 'index']);
    Route::post('/notes', [NoteController::class, 'store']);
    Route::put('/notes/{note}', [NoteController::class, 'update']);
    Route::delete('/notes/{note}', [NoteController::class, 'destroy']);

});
