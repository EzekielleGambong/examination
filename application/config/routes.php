<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// $route['default_controller'] = 'welcome';
// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;
$route['default_controller'] = 'jokes';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['jokes'] = 'jokes/index';
$route['jokes/new'] = 'jokes/new_joke';
$route['jokes/add_joke'] = 'jokes/add_joke';
$route['jokes/(:num)'] = 'jokes/joke/$1';
$route['jokes/(:num)/delete'] = 'jokes/delete_joke/$1';

?>
