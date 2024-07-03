<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
  return $request->user();
})->middleware('auth:sanctum');

Route::get('/teste', function (Request $request) {
  $response = Http::get('https://jsonplaceholder.typicode.com/posts');

  $result = array();

  foreach ($response -> json() as $post) {
    $userID = $post['userId'];

    unset($post['userId']);

    if (array_key_exists($userID, $result)) {
      array_push($result[$userID], $post);
    } else {
      $result[$userID] = array();
    }
  }

  return $result;
});
