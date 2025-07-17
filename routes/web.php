<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminVideoController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminGalleryController;
use App\Http\Controllers\AdminDashboardController;


// Dashboard
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
});


// Route::get('/admin-contact', [AdminContactController::class, 'index'])->name('admin-contact');
Route::get('/admin-contact', [AdminContactController::class, 'index'])->name('admin.contact');

Route::prefix('admin-gallery')->middleware(['auth', 'verified'])->name('admin-gallery.')->group(function () {
    Route::get('/', [AdminGalleryController::class, 'index'])->name('index');
    Route::get('/create', [AdminGalleryController::class, 'create'])->name('create');
    Route::post('/', [AdminGalleryController::class, 'store'])->name('store');
    Route::get('/{gallery}/edit', [AdminGalleryController::class, 'edit'])->name('edit');
    Route::put('/{gallery}', [AdminGalleryController::class, 'update'])->name('update');
    Route::delete('/{gallery}', [AdminGalleryController::class, 'destroy'])->name('destroy');
});

Route::prefix('admin-videos')->middleware(['auth', 'verified'])->name('admin-videos.')->group(function () {
    Route::get('/', [AdminVideoController::class, 'index'])->name('index');
    Route::get('/create', [AdminVideoController::class, 'create'])->name('create');
    Route::post('/', [AdminVideoController::class, 'store'])->name('store');
    Route::get('/{video}/edit', [AdminVideoController::class, 'edit'])->name('edit');
    Route::put('/{video}', [AdminVideoController::class, 'update'])->name('update');
    Route::delete('/{video}', [AdminVideoController::class, 'destroy'])->name('destroy');
});


// Public contact form submission
Route::post('/contact-submit', [AdminContactController::class, 'store'])->name('contact.store');

// Admin dashboard routes (secure with auth if needed)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin-contact', [AdminContactController::class, 'index'])->name('admin.contact');
    Route::get('/admin-contact/{id}', [AdminContactController::class, 'show'])->name('admin.contact.show');
    Route::delete('/admin-contact/{id}', [AdminContactController::class, 'destroy'])->name('admin.contact.delete');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile'); // ← this line
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/actors', [HomeController::class, 'actors'])->name('actors');

Route::get('/ad-film', [HomeController::class, 'adfilm'])->name('ad-film');

Route::get('/birthday-party-planning', [HomeController::class, 'birthdaypartyplanning'])->name('birthday-party-planning');

Route::get('/comedians', [HomeController::class, 'comedians'])->name('comedians');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/corporate-event', [HomeController::class, 'corporateevent'])->name('corporate-event');

Route::get('/corporate-photography', [HomeController::class, 'corporatephotography'])->name('corporate-photography');

Route::get('/corporate-videos', [HomeController::class, 'corporatevideos'])->name('corporate-videos');

Route::get('/dance-group', [HomeController::class, 'dancegroup'])->name('dance-group');

Route::get('/documentary-film', [HomeController::class, 'documentaryfilm'])->name('documentary-film');

Route::get('/e-commerce-photography', [HomeController::class, 'ecommercephotography'])->name('e-commerce-photography');

Route::get('/event-photography', [HomeController::class, 'eventphotography'])->name('event-photography');

Route::get('/fashion-photography', [HomeController::class, 'fashionphotography'])->name('fashion-photography');

Route::get('/feature-film', [HomeController::class, 'featurefilm'])->name('feature-film');

Route::get('/photo', [HomeController::class, 'photo'])->name('gallery');

Route::get('/kids-photography', [HomeController::class, 'kidsphotography'])->name('kids-photography');

Route::get('/maternity-photography', [HomeController::class, 'maternityphotography'])->name('maternity-photography');

Route::get('/mixing-and-mastering', [HomeController::class, 'mixingandmastering'])->name('mixing-and-mastering');

Route::get('/modelling-agency', [HomeController::class, 'modellingagency'])->name('modelling-agency');

Route::get('/music-concert', [HomeController::class, 'musicconcert'])->name('music-concert');

Route::get('/music-videos', [HomeController::class, 'musicvideos'])->name('music-videos');

Route::get('/pre-wedding-photography', [HomeController::class, 'preweddingphotography'])->name('pre-wedding-photography');

Route::get('/road-shows-mall-shows', [HomeController::class, 'roadshowsmallshows'])->name('road-shows-mall-shows');

Route::get('/short-film', [HomeController::class, 'shortfilm'])->name('short-film');

Route::get('/singers-musician', [HomeController::class, 'singersmusician'])->name('singers-musician');

Route::get('/social-workers', [HomeController::class, 'socialworkers'])->name('social-workers');

Route::get('/song-writing', [HomeController::class, 'songwriting'])->name('song-writing');

Route::get('/sound-designing', [HomeController::class, 'sounddesigning'])->name('sound-designing');

Route::get('/sound-recording', [HomeController::class, 'soundrecording'])->name('sound-recording');

Route::get('/sports-professionals', [HomeController::class, 'sportsprofessionals'])->name('sports-professionals');

Route::get('/studio-on-hire', [HomeController::class, 'studioonhire'])->name('studio-on-hire');

Route::get('/wedding-photography', [HomeController::class, 'weddingphotography'])->name('wedding-photography');

Route::get('/wedding-planning', [HomeController::class, 'weddingplanning'])->name('wedding-planning');

Route::get('/youtuber', [HomeController::class, 'youtuber'])->name('youtuber');


// Breeze auth routes
require __DIR__ . '/auth.php';
