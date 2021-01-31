<?php

use App\Http\Controllers\SigmaDigitalController;
use App\Client;
use Illuminate\Support\Facades\Route;

/* Route::get('/',[
    'uses' => 'SigmaDigitalController@index',
    'as'   => 'home'
]); */
Route::get('/', 'SigmaDigitalController@index')->name('/');

/* Route::get('/contact',[
    'uses' => 'SigmaDigitalController@contact',
    'as'   => 'contact'
]); */
Route::get('/contact', 'SigmaDigitalController@contact' )->name('contact');

Route::post('/contact', 'SigmaDigitalController@submitFrontInquiry' )->name('submit-front-inquiry');

Route::get('/about', 'SigmaDigitalController@about')->name('about-us');

Route::get('/privacy', 'SigmaDigitalController@privacyPolicy')->name('privacy-policy');

Route::get('/cms-management', 'SigmaDigitalController@cmsManagement')->name('cms-management');

Route::get('/ecommerce-management', 'SigmaDigitalController@eCommerceManagement')->name('e-commerce');

Route::get('/email-marketing', 'SigmaDigitalController@emailMarketing')->name('email-marketing');

Route::get('/marketing-automation', 'SigmaDigitalController@marketingAutomation')->name('marketing-automation');

Route::get('/virtual-assistance', 'SigmaDigitalController@virtualAssistance')->name('virtual-assistance');

Route::get('/online-reputation-management', 'SigmaDigitalController@onlineReputationManagement')->name('online-reputation-management');

Route::get('/search-engine-optimization', 'SigmaDigitalController@searchEngineOptimization')->name('search-engine-optimization');

Route::get('/social-media-marketing', 'SigmaDigitalController@socialMediaMarketing')->name('social-media-marketing');

Route::get('/crm-marketing', 'SigmaDigitalController@crmMarketing')->name('crm-marketing');

Route::get('/client-register', 'ClientRegisterController@index' )->name('client-register');

Route::post('/client-register/save', 'ClientRegisterController@saveClientRegister')->name('save-client-register');

Route::get('/our-packages', 'SigmaDigitalController@ourPackages')->name('our-packages');

Route::get('/client/manage', 'ClientRegisterController@manageClientRegister' )->name('manage-client');


Route::get('/package', 'PackageController@clientRegistation')->name('package');

Route::post('/save', 'PackageController@savePackage')->name('save-package');

//admin----

Route::get('/user/add', 'UserController@index' )->name('add-user');

Route::post('/user/save', 'UserController@saveUser' )->name('save-user');

Route::get('/user/manage', 'UserController@manage' )->name('manage-user');

Route::get('/user/edit/{id}', 'UserController@editUser' )->name('edit-user');

Route::post('/user/update', 'UserController@updateUser' )->name('update-user');

Route::get('/user/show/{id}', 'UserController@showUser' )->name('show-user');

Route::get('/user/delete/{id}', 'UserController@deleteUser' )->name('delete-user');

Route::get('/client/add', 'ClientController@index' )->name('add-client');

Route::post('/client/save', 'ClientController@saveClient' )->name('save-client');

Route::get('/client/manage', 'ClientController@manage' )->name('manage-client');

Route::get('/client/edit/{id}', 'ClientController@editClient' )->name('edit-client');

Route::post('/client/update', 'ClientController@updateClient' )->name('update-client');

Route::get('/client/show/{id}', 'ClientController@showClient' )->name('show-client');

Route::get('/client/delete/{id}', 'ClientController@deleteClient' )->name('delete-client');


Route::get('/client-registation', 'ClientController@clientRegistation')->name('client-registation');

Route::post('/client-registation/save', 'ClientController@saveClient' )->name('save-client');



Route::get('/project/add', 'ProjectController@index' )->name('add-project');

Route::post('/project/save', 'ProjectController@saveProject' )->name('save-project');

Route::get('/project/manage', 'ProjectController@manageProject' )->name('manage-project');

Route::get('/project/edit,{id}', 'ProjectController@editProject' )->name('edit-project');

Route::post('/project/update', 'ProjectController@updateProject' )->name('update-project');

Route::get('/project/show/{id}', 'ProjectController@showProject' )->name('show-project');

Route::get('/project/delete/{id}', 'ProjectController@deleteProject' )->name('delete-project');

Route::resource('/inquiry', 'InquiryController');



//end admin--



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
