<?php

use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    if (Auth::user()) {

        if (Auth::user()->type == 'Admin') {
            return redirect()->route('dashboard');
        } if (Auth::user()->type =='Player' || Auth::user()->type =='player') {
            // dd("here");
            return redirect()->route('player-dashboard');
        } if (Auth::user()->type == 'college coach' || Auth::user()->type == 'high school coach' && Auth::user()->user_status == 1) {

            return redirect()->route('coach-dashboard');
        }
        // elseif(Auth::user()->type == 'Caoch'){
        //     return redirect()->route('coach-dashboard');
        // }

        // return redirect()->route('home');
    }
    return redirect()->route('home');
});



// ADMIN PANEL ROUTES---------------------------------------
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    // DASHBOARD
    Route::get('/', function () {
        if (Auth::user()) {
            if (Auth::user()->type == 'Admin' || Auth::user()->type == 'User') {
                return redirect()->route('dashboard');
            }
            return redirect()->route('home');
        }
        return redirect()->route('home');
    });
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');


    Route::apiResources(['user' => 'Admin\UserController']);
    Route::apiResources(['logo' => 'Admin\LogoController']);
    Route::apiResources(['setting' => 'Admin\SettingController']);
    // Route::apiResources(['banner'=>'Admin\BannerController']);
    Route::apiResources(['article' => 'Admin\ArticleController']);
    // Route::apiResources(['brand'=>'Admin\BrandController']);
    // Route::apiResources(['feature'=>'Admin\FeatureController']);
    // Route::apiResources(['package'=>'Admin\PackageController']);
    // Route::apiResources(['star_rating'=>'Admin\StarRatingController']);
    // Route::apiResources(['user_video'=>'Admin\UserVideoController']);
    // Route::resource('/contact_detail', 'Admin\ContactController');
    Route::resource('/subscription', 'Admin\SubscriptionController');
    Route::resource('/video', 'Admin\VideoController');
    Route::resource('/terms-conditions', 'Admin\TermsAndCondtionsController');



    // Player Dashboard Funcationalty
    Route::post('basic-info', 'Web\PlayerController@basicInfo')->name('basic-info');
    Route::post('combine-result', 'Web\PlayerController@combineResult')->name('combine-result');
    Route::post('honor-award', 'Web\PlayerController@honorAward')->name('honor-award');
    Route::post('academic-info', 'Web\PlayerController@academicInfo')->name('academic-info');
    Route::post('personal-info', 'Web\PlayerController@personalInfo')->name('personal-info');
    Route::post('my-links', 'Web\PlayerController@myLinks')->name('my-links');
    Route::post('player-evaluation', 'Web\PlayerController@playerEvaluation')->name('player-evaluation');
    Route::post('user-video', 'Web\PlayerController@userVideo')->name('user-video');
    Route::post('player-article', 'Web\PlayerController@playerArticle')->name('player-article');
    Route::post('change-password', 'Web\PlayerController@changePassword')->name('change-password');
    Route::get('show-article-by-id', 'Web\PlayerController@showArticleById')->name('show-article-by-id');
    Route::get('show-video-by-id', 'Web\PlayerController@showVideoById')->name('show-video-by-id');
    Route::get('delete-article-by-id', 'Web\PlayerController@deleteArticleById')->name('delete-article-by-id');
    Route::get('delete-video-by-id', 'Web\PlayerController@deleteVideoById')->name('delete-video-by-id');
    Route::post('user-profile-upload', 'Web\PlayerController@userProfileUpload')->name('user-profile-upload');
    Route::post('add-friend', 'Web\PlayerController@addFriend')->name('add-friend');
    Route::post('remove-friend', 'Web\PlayerController@removeFriend')->name('remove-friend');
    Route::post('req-accept', 'Web\PlayerController@reqAccept')->name('req-accept');
    Route::post('req-decline', 'Web\PlayerController@reqDecline')->name('req-decline');
    Route::post('scholarship-offer', 'Web\PlayerController@scholarshipOffer')->name('scholarship-offer');
    Route::post('paypal-payment', 'Web\PlayerController@paypalPayment')->name('paypal-payment');

    Route::get('chat/{id}',[ChatController::class,'chating'])->name('chat');
    Route::post('chat-store', [ChatController::class,'chatStore'])->name('chat-store');

    Route::post('coach-basic-info', 'Web\PlayerController@coachBasicIinfo')->name('coach-basic-info');
    Route::post('addtional-coach', 'Web\PlayerController@addtionalCoach')->name('addtional-coach');
    Route::get('delete-addtional-coach-by-id', 'Web\PlayerController@deleteAddtionalCoachById')->name('delete-addtional-coach-by-id');
    Route::get('show-addtional-coach-by-id', 'Web\PlayerController@showAddtionalCoachById')->name('show-addtional-coach-by-id');
    Route::post('addtional-coach-update', 'Web\PlayerController@addtionalCoachUpdate')->name('addtional-coach-update');
    Route::post('premium-payment', 'Web\PlayerController@premiumPayment')->name('premium-payment');
    Route::post('comment', [CommentController::class,'store'])->name('comment');
    Route::post('like', [CommentController::class,'like'])->name('like');


    // coach Dashboard Funcationalty

});
Route::group(['middleware' => 'auth', 'prefix' => 'user'], function () {
    Route::get('/player-dashboard', 'Admin\DashboardController@playerDashboard')->name('player-dashboard');
    Route::get('/coach-dashboard', 'Admin\DashboardController@coachDashboard')->name('coach-dashboard');

});
Auth::routes();
Route::get('/user-profile/{id}', 'Web\HomeController@playersProfile')->name('user-profile');
Route::post('subscription-store', 'Admin\SubscriptionController@store');



Route::post('search', 'Web\HomeController@search_players')->name('search');
Route::get('player-for-players-page', 'Web\HomeController@playerForPlayersPage')->name('player-for-players-page');
Route::post('private-search', 'Web\HomeController@privateSearch')->name('private-search');
Route::get('/home', 'Web\HomeController@index')->name('home');
Route::get('/players', 'Web\HomeController@players')->name('players');
Route::get('/export-player-search', 'Web\HomeController@exportPlayerSearch')->name('export-player-search');
Route::get('/coaches', 'Web\HomeController@coaches')->name('coaches');
Route::get('/player-profile', 'Web\HomeController@playersProfile')->name('players-profile');
Route::get('/coach-profile/{id}', 'Web\HomeController@coachProfile')->name('coach-profile');
Route::get('/articles', 'Web\HomeController@articles')->name('articles');
Route::get('/articles-detail/{id}', 'Web\HomeController@articlesDetail')->name('article-view');
Route::get('/web_register', 'Web\HomeController@web_register')->name('web_register');
Route::get('/web_login', 'Web\HomeController@web_login')->name('web_login');
Route::post('web_login', 'Web\HomeController@authenticate')->name('web-login');
Route::get('terms-condtions', 'Web\HomeController@termsCondtions')->name('terms-condtions');
Route::post('/test', 'Web\HomeController@test')->name('test');
Route::get('cancel', 'user@cancel')->name('payment.cancel');
Route::get('payment/success', 'Web\UserRegisterController@success')->name('payment.success');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');


// Route::get('/player-dashboard', 'Admin\DashboardController@playerDashboard')->name('player-dashboard');
// Route::get('/coach-dashboard', 'Admin\DashboardController@coachDashboard')->name('coach-dashboard');

Route::post('user-regiser', 'Web\UserRegisterController@resgister')->name('user-register');
