<?php

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
use App\User;



    Route::get('/', 'HomeController@index');


    //Route::get('login', 'LoginController@getlogin');
    //Route::post('login', 'LoginController@postlogin');

    Auth::routes();
    Route::get('home', 'HomeController@index')->middleware('auth');
    Route::get('stories','StoryController@stories');
    Route::get('campaign','CampaignController@index');
    Route::get('heroes','StoryController@WomanHeroes');
    Route::get('witness','StoryController@Witness');
    Route::get('events','EventController@index');
    Route::get('danger-zone', function (){
        return view('public.Danger-zone');
    });
Route::resource('donate', 'DonateController', ['only' => [
    'create', 'store', 'edit', 'list'
]]);

    Route::get('donate','DonateController@index');
    Route::post('up-donate','DonateController@store');


Route::group(['prefix'=>'master','middleware'=>'admin'],function(){


// Administer Display
    Route::get('/','AdminController@admin');
    Route::get('/data-user','AdminController@DataUser');
    Route::get('/data-user-request','UserController@DataUserRequest');
    Route::get('/data-alert','AdminController@DataAlert');
    Route::get('/data-story','AdminController@DataStory');
    Route::get('/data-create-event','EventController@create');
    Route::get('/data-event','AdminController@DataEvent');
    Route::get('/data-create-campaign','CampaignController@create');
    Route::get('/data-campaign','AdminController@DataCampaign');
    Route::get('/data-volunteer-request','VolunteerController@VolunteerRequest');
    Route::get('/data-volunteer-list','AdminController@DataVolunteerList');
    Route::get('/data-donate','AdminController@DataDonate');


//--------User Functions-------
    Route::get('/{id}/accept-user', 'UserController@acceptRequest'); // Sửa
    Route::get('/{id}/edit-user', 'UserController@edit'); // Sửa
    Route::post('/update-user', 'UserController@update'); // Xử lý sửa
    Route::get('/{id}/delete-user', 'UserController@destroy'); // Xóa
    Route::get('/{id}/delete-user-request', 'UserController@destroyRequest'); // Xóa


// -------Campaign Functions-------

    Route::resource('campaign', 'CampaignController', ['only' => [
        'create', 'store', 'edit', 'list'
    ]]);
    Route::post('/create-campaign','CampaignController@store');
    Route::get('/{id}/edit-campaign', 'CampaignController@edit'); // Sửa
    Route::post('/update-campaign', 'CampaignController@update'); // Xử lý sửa
    Route::get('/{id}/delete-campaign', 'CampaignController@destroy'); // Xóa


// -------Event Functions--------
    Route::resource('event', 'EventController', ['only' => [
        'create', 'store', 'edit', 'list'
    ]]);
    Route::post('/create-event','EventController@store');
    Route::get('/{id}/edit-event', 'EventController@edit'); // Sửa
    Route::post('/update-event', 'EventController@update'); // Xử lý sửa
    Route::get('/{id}/delete-event', 'EventController@destroy'); // Xóa


//--------- Volunteer Functions ------
    Route::get('/{id}/accept-volunteer','VolunteerController@accept');
    Route::get('/{id}/edit-volunteer', 'VolunteerController@edit'); // Sửa
    Route::post('/update-volunteer', 'VolunteerController@update'); // Xử lý sửa
    Route::get('/{id}/delete-volunteer', 'VolunteerController@destroy'); // Xóa

//-------- Story Functions ------
    Route::get('/{id}/edit-story', 'StoryController@edit'); // Sửa
    Route::post('/update-story', 'StoryController@update'); // Xử lý sửa
    Route::get('/{id}/delete-story', 'StoryController@destroy'); // Xóa

//------- Donate Function -------
    Route::get('/{id}/delete-donate','DonateController@destroy');
});


// Emergency Functions
    Route::get('emergency', 'EmergencyController@index')->middleware('auth');
    Route::post('emergency','EmergencyController@help');