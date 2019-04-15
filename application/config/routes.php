<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts'] = 'posts/index';

$route['default_controller'] = 'pages/logInView';
$route['(:any)'] = 'pages/logInView/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
