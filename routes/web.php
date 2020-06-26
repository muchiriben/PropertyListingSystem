<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', 'HomeController@index_client' );

// Customer

Route::get('/listings', function () {
    return view('pages.customer.view_listings');
});
Route::get('/blog', function () {
    return view('pages.blog');
});

// ------------------------ADMIN---------------------------
Route::get('/admin', function () {
    return view('layouts.admin_layout');
});

// Reports

Route::get('/admin/reports', function () {
    return view('pages.admin.admin_reports');
});

// Listings

Route::get('/admin/listings', function () {
    return view('pages.admin.admin_listings');
});

Route::get('/admin/listings/create', function () {
    return view('pages.admin.admin_listings_create');
});

// Agents

Route::get('/admin/agents', function () {
    return view('pages.admin.admin_agents');
});

Route::get('/admin/agents/create', function () {
    return view('pages.admin.admin_agents_create');
});

// Blog
/*
Route::get('/admin/blog', function () {
    return view('pages.admin.admin_blog');
});
*/

Route::Resource('/admin/blog','BlogPostController')->middleware('auth');

Route::get('/blog', 'BlogPostController@index_client' );
Route::get('/blog/{id}', 'BlogPostController@show_client' )->name('blog.show_client');

Route::Resource('/admin/listings','PropertyController')->middleware('auth');

Route::get('/listings', 'PropertyController@index_client' );
Route::get('/listings/{id}', 'PropertyController@show_client' )->name('listings.show_client');

Auth::routes();

