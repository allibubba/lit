<?php
$router->get('home', function() { (new \App\Home)->index(); });
$router->post('data', function() { (new \App\Home)->input(); });