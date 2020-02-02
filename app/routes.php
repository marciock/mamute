<?php

$route[]=['/','HomeController@index'];
$route[]=['/posts','PostsController@index'];
$route[]=['/posts/{32}/show','PostsController@show'];




return $route;