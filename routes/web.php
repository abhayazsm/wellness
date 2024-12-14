<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Auth\CustomLoginController;  
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\IntakeController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ModalController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('login', [CustomLoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [CustomLoginController::class, 'login'])->name('custom.login');
Route::post('logout', [CustomLoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/', 'FrontendController@index')->name('home');
Route::get('/appointment', 'FrontendController@appointment')->name('appointment');
Route::post('/submit-appointment', 'FrontendController@submitAppointment')->name('appointment.store');
Route::get('/about-us', 'FrontendController@aboutUs')->name('about-us');
Route::get('/contact-us', 'FrontendController@contactUs')->name('contact-us');
Route::post('/submit-contact-us', 'FrontendController@submitContactUs')->name('contact-us.store');
Route::get('/benefits', 'FrontendController@benefits')->name('benefits');
Route::get('/success-stories', 'FrontendController@successStories')->name('success-stories');
Route::get('/services/{slug}', 'FrontendController@servicePages')->name('services');
Route::get('/blog-list/{slug?}', 'FrontendController@blogList')->name('blog-list');
Route::get('/blog-detail/{slug}', 'FrontendController@blogDetail')->name('blog-detail');
Route::get('/blog-category/{slug}', 'FrontendController@blogCategory')->name('blog-category');
Route::get('/blog-tag/{slug}', 'FrontendController@blogTag')->name('blog-tag');
Route::get('/gallery', 'FrontendController@mediaList')->name('gallery');
Route::get('/intake', 'FrontendController@intakeForm')->name('intake');
Route::get('/fetch-media', [FrontendController::class, 'fetchMedia']);
Route::get('/faq', [FrontendController::class, 'faqData']);

Route::post('/submit-intake-form', [FrontendController::class, 'submitIntakeForm'])->name('submit-intake-form');
Route::post('/api/store-visit-count', [FrontendController::class, 'storeVisitCount']);

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('tags', TagController::class);
    Route::resource('slides', SlideController::class);
    Route::resource('media', MediaController::class);
    Route::resource('menus', MenuController::class);
    Route::resource('services', ServiceController::class);
    Route::get('appointments', [AppointmentController::class, 'index'])->name('appointments');
    Route::get('contacts', [ContactUsController::class, 'index'])->name('contacts');
    Route::get('intake', [IntakeController::class, 'index'])->name('intake');
    Route::get('intake-detail/{id}', [IntakeController::class, 'showFormData'])->name('intake-detail');
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('modals', ModalController::class);
    Route::patch('modals/{modal}/updateStatus', [ModalController::class, 'updateStatus'])->name('admin.modals.updateStatus');
});

// Blogs Route

// Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
// Route::get('/blog/{slug}', [BlogController::class, 'detail'])->name('blog.detail');
// Route::get('/blogs/category/{slug}', [BlogController::class, 'category'])->name('blogs.category');
// Route::get('/blogs/tag/{slug}', [BlogController::class, 'tag'])->name('blogs.tag');
