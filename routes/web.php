<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Backend\SusbscriptionController;
use App\Http\Controllers\Backend\MessagesController;
use App\Http\Controllers\Backend\BlogcategoriesController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\ServicesController;

use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\NewsletterController;
use App\Http\Controllers\Frontend\ContactusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


//Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']], function () {
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:sanctum,admin', 'verified'])->get('admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('/admin/profile', [AdminProfileController::class, 'adminProfile'])->name('admin.profile');
Route::post('/admin/profile/store', [AdminProfileController::class, 'adminProfileStore'])->name('admin.profile.store');
Route::post('/admin/Update/change/password', [AdminProfileController::class, 'AdminUpdateChangePassword'])->name('update.change.password');
Route::get('/admin/users/list', [UsersController::class, 'users'])->name('users.list');
Route::get('/admin/newsletter/list', [SusbscriptionController::class, 'newsletter'])->name('newsletter.list');
Route::get('/admin/message/list', [MessagesController::class, 'message'])->name('message.list');

//Blog category routes
Route::group(['prefix' => '/admin/blog/'], function () {
    Route::get('category', [BlogcategoriesController::class, 'index'])->name('category.index');
    Route::post('category/store', [BlogcategoriesController::class, 'store'])->name('category.store');
    Route::get('category/delete/{id}', [BlogcategoriesController::class, 'destroy'])->name('category.delete');
    Route::get('category/edit/{id}', [BlogcategoriesController::class, 'edit']);
    Route::post('category/update', [BlogcategoriesController::class, 'update'])->name('category.update');
});

//Blog routes
Route::group(['prefix' => '/admin/blog/'], function () {
Route::get('', [BlogController::class, 'index'])->name('blog.index');
Route::get('create', [BlogController::class, 'create'])->name('blog.create');
Route::post('store', [BlogController::class, 'store'])->name('blog.store');
Route::get('delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
Route::get('edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('update', [BlogController::class, 'update'])->name('blog.update');
});

//Services routes
Route::group(['prefix' => '/admin/service/'], function () {
Route::get('', [ServicesController::class, 'index'])->name('service.index');
Route::get('create', [ServicesController::class, 'create'])->name('service.create');
Route::post('store', [ServicesController::class, 'store'])->name('service.store');
Route::get('delete/{id}', [ServicesController::class, 'destroy'])->name('service.delete');
Route::get('edit/{id}', [ServicesController::class, 'edit'])->name('service.edit');
Route::post('update', [ServicesController::class, 'update'])->name('service.update');
});









///User All Routes

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/', [IndexController::class, 'index']);
Route::get('/user/logout', [IndexController::class, 'userLogout'])->name('user.logout');
Route::get('/aboutus', [IndexController::class, 'about'])->name('about');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::get('/services', [IndexController::class, 'services'])->name('services');
Route::get('/blogs', [IndexController::class, 'blogs'])->name('blogs');
Route::get('/portfolio', [IndexController::class, 'portfolio'])->name('portfolio');

Route::get('/blog/{slug}', [IndexController::class, 'blogsDetails'])->name('blog.details');

Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletter');
Route::post('/message/store', [ContactusController::class, 'store'])->name('message.store');
