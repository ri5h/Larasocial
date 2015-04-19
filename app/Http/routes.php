<?php

/**
 * Registration
 */
Route::get('/', ['as' => 'registration_path', 'uses' => 'RegistrationController@create']);

Route::post('/', ['as' => 'registration_path', 'uses' => 'RegistrationController@store']);

/**
 * Session
 */
Route::post('login', ['as' => 'login_path', 'uses' => 'SessionController@store']);

Route::delete('logout', ['as' => 'logout_path', 'uses' => 'SessionController@destroy']);


/**
 * Feeds
 */
Route::get('feeds', ['as' => 'feeds_path', 'uses' => 'FeedController@index']);

Route::post('feeds', ['as' => 'feeds_path', 'uses' => 'FeedController@store']);

Route::get('feeds/more', ['as' => 'feeds_path_more', 'uses' => 'FeedController@more']);

/**
 * Users
 */
Route::get('users', ['as' => 'users_path', 'uses' => 'UserController@index']);

Route::get('users/{id}', ['as' => 'user_path', 'uses' => 'UserController@show']);

/**
 * Friend-requests
 */
Route::get('friend-requests', ['as' => 'friend_request_path', 'uses' => 'FriendRequestController@index']);

Route::post('friend-requests', ['as' => 'friend_request_path', 'uses' => 'FriendRequestController@store']);

Route::delete('friend-requests', ['as' => 'friend_request_path', 'uses' => 'FriendRequestController@destroy']);


/**
 * Friends
 */
Route::post('friends', ['as' => 'friends_path', 'uses' => 'FriendController@store']);

Route::get('friends', ['as' => 'friends_path', 'uses' => 'FriendController@index']);

Route::delete('friends', ['as' => 'friends_path', 'uses' => 'FriendController@destroy']);

/**
 * Messages
 */
Route::get('/messages/compose/{id}', ['as' => 'compose_message_path', 'uses' => 'MessagesController@create']);

