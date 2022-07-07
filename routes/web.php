<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
use App\Http\Controllers\Back;

Auth::routes();

Route::get('/', [Main::class, 'index']);
Route::get('/work/what', [Main::class, 'index_what']);
Route::get('/work/where', [Main::class, 'index_where']);
Route::get('/work/impact', [Main::class, 'index_impact']);
Route::get('/about-us', [Main::class, 'index_about_us']);
Route::get('/join-us', [Main::class, 'index_join_us']);
Route::get('/stories', [Main::class, 'index_stories']);
Route::get('/donate', [Main::class, 'index_donate']);
Route::get('/donate-Canada', [Main::class, 'index_donate_canada']);
Route::get('/donate-usa', [Main::class, 'index_donate_usa']);
Route::get('/resources', [Main::class, 'index_resources']);
Route::get('/blog', [Main::class, 'index_blog']);
Route::get('/our-offices', [Main::class, 'index_our_offices']);
Route::post('/contact', [Back::class, 'post_contact']);

Route::get('lang/{lang}', [Main::class, 'swap'])->name('lang.swap');
Route::get('/sendEmail', [Main::class, 'sendmails']);

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

    //user
    Route::get('/admin', [Back::class, 'index_back']);
    Route::get('/admin/user/delete/{id}', [Back::class, 'user_delete']);
    Route::get('/getUser/{id}', [Back::class, 'get_edit']);
    Route::post('/edituser', [Back::class, 'user_edit']);

    Route::post('/register', [Back::class, 'post_register']);
    Route::get('/contactform', [Back::class, 'index_contact']);
    Route::get('/admin/contact/delete/{id}', [Back::class, 'contact_delete']);

    //sliders
    Route::get('/slider', [Back::class, 'index_slider']);
    Route::post('/slider', [Back::class, 'post_slider']);
    Route::get('/admin/slider/delete/{id}', [Back::class, 'slider_delete']);
    Route::get('/getSlider/{id}', [Back::class, 'get_slider']);
    Route::post('/editarslider', [Back::class, 'edit_slider']);

    //blogs
    Route::get('/blogs', [Back::class, 'index_blog_edit']);
    Route::post('/blogs', [Back::class, 'post_blog_edit']);
    Route::get('/admin/blog/delete/{id}', [Back::class, 'blog_delete']);
    Route::get('/getBlog/{id}', [Back::class, 'get_glob']);
    Route::post('/editBlogs', [Back::class, 'edit_blog']);

    //videos
    Route::get('/videos', [Back::class, 'index_videos']);
    Route::post('/videos', [Back::class, 'post_videos']);
    Route::get('/admin/video/delete/{id}', [Back::class, 'video_delete']);
    Route::get('/getVideo/{id}', [Back::class, 'get_video']);
    Route::post('/editVideo', [Back::class, 'edit_video']);

    //numbers
    Route::get('/numbers/home_page', [Back::class, 'index_numbers_home_page']);
    Route::post('/numbers/home_page', [Back::class, 'post_numbers_home_page']);
    Route::get('/admin/numbers/home_page/delete/{id}', [Back::class, 'numbers_home_page_delete']);
    Route::get('/getNumbers/{id}', [Back::class, 'get_numbers']);
    Route::post('/editNumbers', [Back::class, 'edit_numbers']);

    //texts whats
    Route::get('/texts_what', [Back::class, 'index_text_what']);
    Route::post('/texts_what', [Back::class, 'post_text_what']);
    Route::get('/admin/texts_what/delete/{id}', [Back::class, 'text_what_delete']);
    Route::get('/getTexts/{id}', [Back::class, 'get_texts']);
    Route::post('/editTexts', [Back::class, 'edit_texts']);

    //partners
    Route::get('/partners', [Back::class, 'index_partners']);
    Route::post('/partners', [Back::class, 'post_partners']);
    Route::get('/admin/partners/delete/{id}', [Back::class, 'partners_delete']);
    Route::get('/getPartner/{id}', [Back::class, 'get_partner']);
    Route::post('/editPartner', [Back::class, 'edit_partner']);


    Route::get('/financial', [Back::class, 'index_financial']);
    Route::post('/financial', [Back::class, 'post_financial']);
    Route::get('/admin/financial/delete/{id}', [Back::class, 'financial_delete']);
    Route::get('/anual', [Back::class, 'index_anual']);
    Route::post('/anual', [Back::class, 'post_anual']);
    Route::get('/admin/anual/delete/{id}', [Back::class, 'anual_delete']);
});