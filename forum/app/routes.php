<?php

Route::get('changelang/{lang}', function($lang) {
    if (File::exists(app_path() . "/lang/" . $lang . "/messages.php")) {
        Session::put('language', $lang);
        Lang::setLocale($lang);
    }
    return Redirect::back();
});

Route::resource('discussion', 'DiscussionController');
Route::resource('category', 'CategoryController');
Route::resource('post', 'PostController');
Route::get('/', 'HomeController@getHome');
Route::get('register', 'HomeController@getRegister');
Route::get('login', 'HomeController@getLogin');
Route::get('tos', 'HomeController@getTos');
Route::post('user', 'UserController@create');
Route::post('login', 'UserController@login');
Route::get('logout', 'UserController@logout');
Route::get('profile/{email}', 'UserController@showProfile');
Route::get('fbLogin', 'UserController@fbLogin');
Route::get('fbLogin/callback', 'UserController@fbLoginCall');
Route::post('user/changeimg', 'UserController@postChangeImg');
Route::get('user/restoreFbImage', 'UserController@restoreFb');
Route::get('user/set_password', 'UserController@setPasswordPage');
Route::post('user/set_password', 'UserController@setPassword');
Route::get('user/change_password', 'UserController@changePasswordPage');
Route::post('user/change_password', 'UserController@changePassword');
Route::post('user/update_description', 'UserController@updateDescription');
Route::post('user/update_job', 'UserController@updateJob');
Route::post('user/update_city', 'UserController@updateCity');
Route::get('my_settings', 'UserController@mySettings');
Route::post('user/update_profile', 'UserController@updateProfile');
Route::get('addfriend/{id}', 'UserController@addFriend');
Route::get('friend_requests', 'UserController@friendRequests');
Route::get('acceptRequest/{id}', 'UserController@acceptRequest');
Route::get('rejectRequest/{id}', 'UserController@rejectRequest');
Route::get('activate', 'UserController@activationPage');
Route::get('activate_code/{code}/{acc}', 'UserController@activate');
Route::post('activate', 'UserController@activatePost');
Route::get('forgot', 'UserController@forgotPasswordPage');
Route::post('forgot', 'UserController@forgotPassword');
Route::get('sortDis/{cat}/{type}', 'DiscussionController@sort');
Route::get('discussion/create/{id}', 'DiscussionController@create');
Route::post('discussion/{id}', 'DiscussionController@store');
Route::get('dis_per_page/{num}', 'DiscussionController@dis_per_page');
Route::get('post/{id}/delete', 'PostController@destroy');
Route::get('discussion/{id}/delete', 'DiscussionController@destroy');
Route::get('like/{id}', 'PostController@like');
Route::get('report/{type}/{id}', 'PostController@report');
Route::post('report', 'PostController@postReport');
Route::get('mail/{type}', 'UserController@getMail');
Route::get('ordermail/{by}', 'UserController@setMailOrder');
Route::get('deletemail', 'UserController@deleteMail');
Route::get('restoremail', 'UserController@restoreMail');
Route::get('message/create/{id}', 'UserController@sendMessage');
Route::post('message/create', 'UserController@postSendMessage');
Route::post('sendmsgajax', 'UserController@ajaxSend');
Route::get('search', 'HomeController@getSearch');
Route::get('message/{id}', 'UserController@showMessage');
Route::get('checkPassword', 'UserController@checkPassword');
Route::get('category/{id}/delete', 'CategoryController@destroy');
Route::get('admin-panel', 'AdminController@getIndex');
Route::get('admin-panel/settings', 'AdminController@getSettings');
Route::post('admin-panel/settings', 'AdminController@postSettings');
Route::get('admin-panel/themes', 'AdminController@getThemes');
Route::get('admin-panel/users', 'AdminController@getUsers');
Route::post('admin-panel/themes', 'AdminController@postThemes');
Route::get('setOrder/{by}', 'AdminController@setOrder');
Route::get('setLimit/{num}', 'AdminController@setLimit');
Route::get('mute/{id}', 'AdminController@getMute');
Route::get('unmute/{id}', 'AdminController@unmute');
Route::post('mute/{id}', 'AdminController@postMute');
Route::get('admin-panel/reports', 'AdminController@getReports');
Route::get('report/{id}', 'AdminController@getReport');
Route::get('report_d/{id}', 'AdminController@deleteReport');
Route::get('admin-panel/bans', 'AdminController@getBans');
Route::get('ban_remove/{id}', 'AdminController@removeBan');
Route::get('ban/create', 'AdminController@createBan');
Route::post('ban/create', 'AdminController@postCreateBan');
Route::get('admin-panel/tos', 'AdminController@getTos');
Route::post('admin-panel/tos', 'AdminController@postTos');
Route::get('user/{id}/delete', 'UserController@userDelete');
Route::get('user/{id}/rankup', 'AdminController@userUp');
Route::get('user/{id}/rankdown', 'AdminController@userDown');
Route::get('rejectRequest/{id}', 'UserController@rejectRequest');

//mias
Route::get('login_from_site', 'UserController@loginFromSite');
<<<<<<< HEAD
Route::get('go_to_site', 'HomeController@getSite');
=======
Route::get('go_to_site', 'HomeController@getSite');
>>>>>>> f9eb8f2935e210dc911e20d1ac3f5a5339b5f8e8
