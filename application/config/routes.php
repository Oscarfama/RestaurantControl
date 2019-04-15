<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts'] = 'posts/index';

$route['default_controller'] = 'pages/Form';
$route['(:any)'] = 'pages/Form/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
