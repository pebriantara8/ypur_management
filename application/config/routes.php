<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'frontend/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'admin_new/auth/login_2';

// $route[$this->config->item('admin_dir')] = 'admin/auth';
// $route[$this->config->item('admin_dir').'/(:any)'] = 'admin/$1';
// $route[$this->config->item('admin_dir').'/(:any)/(:any)'] = 'admin/$1/$2';
// $route[$this->config->item('admin_dir').'/(:any)/(:any)/(:any)'] = 'admin/$1/$2/$3';
// $route[$this->config->item('admin_dir').'/(:any)/(:any)/(:any)/(:any)'] = 'admin/$1/$2/$3/$4';
// $route[$this->config->item('admin_dir').'/(:any)/(:any)/(:any)/(:any)/(:any)'] = 'admin/$1/$2/$3/$4/$5';
// $route[$this->config->item('admin_dir').'/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)'] = 'admin/$1/$2/$3/$4/$6';

$route[$this->config->item('admin_dir')] = 'admin_new/auth/login_2';


$route[$this->config->item('admin_dir_new')] = 'admin_new/auth/login_2';
$route[$this->config->item('admin_dir_new').'/(:any)'] = 'admin_new/$1';
$route[$this->config->item('admin_dir_new').'/(:any)/(:any)'] = 'admin_new/$1/$2';
$route[$this->config->item('admin_dir_new').'/(:any)/(:any)/(:any)'] = 'admin_new/$1/$2/$3';
$route[$this->config->item('admin_dir_new').'/(:any)/(:any)/(:any)/(:any)'] = 'admin_new/$1/$2/$3/$4';
$route[$this->config->item('admin_dir_new').'/(:any)/(:any)/(:any)/(:any)/(:any)'] = 'admin_new/$1/$2/$3/$4/$5';
$route[$this->config->item('admin_dir_new').'/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)'] = 'admin_new/$1/$2/$3/$4/$6';

$route['welcome'] = 'frontend/user_auth/landing';
$route['api/(:any)'] = 'api/$1';
$route['api/(:any)/(:any)'] = 'api/$1/$2';
$route['api/(:any)/(:any)/(:any)'] = 'api/$1/$2/$3';
$route['api/(:any)/(:any)/(:any)/(:any)'] = 'api/$1/$2/$3/$4';

$route['schools/(:any)'] = 'schools/$1';
$route['schools/(:any)/(:any)'] = 'schools/$1/$2';
$route['schools/(:any)/(:any)/(:any)'] = 'schools/$1/$2/$3';
$route['schools/(:any)/(:any)/(:any)/(:any)'] = 'schools/$1/$2/$3/$4';

// routing permalink berita post ke berita/post_single
$route['berita/(:any)'] = 'frontend/berita/post_single/$1';

$route['(:any)'] = 'frontend/$1';
$route['(:any)/(:any)'] = 'frontend/$1/$2';
$route['(:any)/(:any)/(:any)'] = 'frontend/$1/$2/$3';
$route['(:any)/(:any)/(:any)/(:any)'] = 'frontend/$1/$2/$3/$4';
$route['(:any)/(:any)/(:any)/(:any)/(:any)'] = 'frontend/$1/$2/$3/$4/$5';
$route['(:any)/(:any)/(:any)/(:any)/(:any)/(:any)'] = 'frontend/$1/$2/$3/$4/$5/$6';
