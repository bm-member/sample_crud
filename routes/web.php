<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('post', 'PostController@index');
Route::get('post/create', 'PostController@create');
Route::post('post', 'PostController@store');
Route::get('post/{id}/edit', 'PostController@edit');
Route::post('post/{id}/edit', 'PostController@update');
Route::get('post/{id}/delete', 'PostController@destroy');
Route::get('post/{id}', 'PostController@show');

Route::get('/test', function () {
    /* $post = App\Post::find(1);
    $user = App\User::find($post->user_id);

    dd($user->name); */

    /* $post = App\Post::find(1);
    dd($post->user->name); */

    $user = App\User::first();
    foreach($user->post as $p) {
        echo '<h1>' . $p->title . '</h1>';
    }
});
