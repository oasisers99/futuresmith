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

Route::get('/', 'Front\FrontController@main');

// Common
Route::group(['prefix' => 'common', 'as' => 'common.', 'namespace' => 'Common'], function(){

    Route::get('redirectToLoginPageWithMessage', 'CommonController@redirectToLoginPageWithMessage')->name('redirectToLoginPageWithMessage');

});

// Route group for front page
Route::group(['prefix' => 'front', 'as' => 'front.', 'namespace' => 'Front'], function(){

    Route::get('getFrontTribes', 'FrontController@getFrontTribes')->name('getFrontTribes');
    Route::get('moreTribeSearch', 'FrontController@moreTribeSearchForm')->name('moreTribeSearch');
    Route::get('projectSearchPage', 'FrontController@projectSearchPage')->name('projectSearchPage');
    Route::get('searchProject', 'FrontController@searchProject')->name('searchProject');
    Route::get('viewProject', 'FrontController@viewProject')->name('viewProject');
    Route::get('contact', 'FrontController@contactPage')->name('contact');
    Route::get('aboutus', 'FrontController@aboutUs')->name('aboutus');
    Route::get('gettingStarted', 'FrontController@gettingStarted')->name('gettingStarted');

    Route::post('sendMessage', 'FrontController@sendMessage')->name('sendMessage');

});




// Route group for login page
Route::group(['prefix' => 'auth', 'as' => 'auth.', 'namespace' => 'Auth'], function () {

    //Users auth control
    Route::get('registrationForm', 'RegisterController@registrationForm')->name('registrationForm');
    Route::post('register', 'RegisterController@register')->name('register');


    //Login control
    Route::get('loginForm', 'LoginController@loginForm')->name('loginForm');
    Route::get('logout', 'LoginController@logout')->name('logout');
    Route::post('login', 'LoginController@login')->name('login');

    // Route::get('users/{user}', 'UserController@show')->name('users.show');
    // Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
    // Route::put('users/{user}', 'UserController@update')->name('users.update');
    // Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
    // Route::get('permissions', 'PermissionController@index')->name('permissions');
    // Route::get('permissions/{user}/repeat', 'PermissionController@repeat')->name('permissions.repeat');
});

Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'User'], function(){

    Route::get('user-detail', 'UserController@userDetail')->name('user-detail');
    Route::post('sendMessage', 'UserController@sendMessage')->name('sendMessage');



    Route::middleware(['logincheck'])->group(function () {
        Route::get('profile-page', 'UserController@profilePage')->name('profile-page');
        Route::get('project-list-page', 'UserController@projectListPage')->name('project-list-page');
        Route::get('message-list-page', 'UserController@messageListPage')->name('message-list-page');


        Route::post('profile-update', 'UserController@profileUpdate')->name('profile-update');
        Route::post('message-mark-as-read', 'UserController@messageMarkAsRead')->name('message-mark-as-read');

    });
});

Route::group(['prefix' => 'tribe', 'as' => 'tribe.', 'namespace' => 'Tribe'], function(){
    Route::get('main', 'TribeController@mainPage')->name('main');
    Route::get('getTribePostings', 'TribeController@getTribePostings')->name('getTribePostings');
    Route::get('searchTribeFull', 'TribeController@searchTribeFull')->name('searchTribeFull');

    /**
     * Tribe functions that require login check.
     */
    Route::middleware(['logincheck'])->group(function () {
        Route::get('createForm', 'TribeController@createTribeForm')->name('createForm');
        Route::get('createPostingForm', 'TribeController@createPostingForm')->name('createPostingForm');
        Route::get('createProjectForm', 'TribeController@createProjectForm')->name('createProjectForm');
        Route::get('setting-main', 'TribeController@settingMain')->name('setting-main');
        Route::get('setting-profile', 'TribeController@settingMain')->name('setting-profile');


        Route::post('createPosting', 'TribeController@createPosting')->name('createPosting');
        Route::post('updatePosting', 'TribeController@updatePosting')->name('updatePosting');
        Route::post('deletePosting', 'TribeController@deletePosting')->name('deletePosting');

        Route::post('createTribe', 'TribeController@createTribe')->name('createTribe');
        Route::post('createProject', 'TribeController@createProject')->name('createProject');


        /**
         * Tribe setting functions (still need login check)
         */
        Route::group(['prefix' => 'setting', 'as' => 'setting.'], function(){
            Route::get('main', 'TribeSetController@settingMain')->name('main');
            Route::get('profile-edit', 'TribeSetController@profileEditForm')->name('profile-edit');
            Route::get('join-request', 'TribeSetController@joinRequest')->name('join-request');
            Route::get('project-list', 'TribeSetController@projectList')->name('project-list');

            Route::post('profile-update', 'TribeSetController@profileUpdate')->name('profile-update');

            Route::post('join-decline', 'TribeSetController@declineJoin')->name('join-decline');
            Route::post('join-accept', 'TribeSetController@acceptJoin')->name('join-accept');


        });

    });

    /**
     * Tribe functions that require login check for ajax calls.
     *
     */
    Route::middleware(['logincheck_ajax'])->group(function () {
        Route::post('requestJoin', 'TribeController@requestJoin')->name('requestJoin');
        Route::post('projectJoinRequest', 'TribeController@projectJoinRequest')->name('projectJoinRequest');
    });

});
