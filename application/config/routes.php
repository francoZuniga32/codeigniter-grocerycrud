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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['empleados'] = 'empleados/empleados';
$route['empleados/add'] = 'empleados/empleados/$1/add';
$route['empleados/insert'] = 'empleados/empleados/$1/insert';
$route['empleados/insert_validation'] = 'empleados/empleados/$1/insert_validation';
$route['empleados/success/:num'] = 'empleados/empleados/$1/success';
$route['empleados/delete/:num'] = 'empleados/empleados/$1/delete';
$route['empleados/edit/:num'] = 'empleados/empleados/$1/edit';
$route['empleados/update_validation/:num'] = 'empleados/empleados/$1/update_validation';
$route['empleados/update/:num'] = 'empleados/empleados/$1/update';
$route['empleados/ajax_list_info'] = 'empleados/empleados/$1/ajax_list_info';
$route['empleados/ajax_list'] = 'empleados/empleados/$1/ajax_list';
$route['empleados/read/:num'] = 'empleados/empleados/$1/read';
$route['empleados/export'] = 'empleados/empleados/$1/export';

$route['prueba'] = 'Prueba';

# Student
$route['students'] = 'students';
$route['students/add'] = 'students/$1/add';
$route['students/insert'] = 'students/$1/insert';
$route['students/insert_validation'] = 'students/$1/insert_validation';
$route['students/success/:num'] = 'students/$1/success';
$route['students/delete/:num'] = 'students/$1/delete';
$route['students/edit/:num'] = 'students/$1/edit';
$route['students/update_validation/:num'] = 'students/$1/update_validation';
$route['students/update/:num'] = 'students/$1/update';
$route['students/ajax_list_info'] = 'students/$1/ajax_list_info';
$route['students/ajax_list'] = 'students/$1/ajax_list';
$route['students/read/:num'] = 'students/$1/read';
$route['students/export'] = 'students/$1/export';

# Teachers
$route['teachers'] = 'teachers';
$route['teachers/add'] = 'teachers/$1/add';
$route['teachers/insert'] = 'teachers/$1/insert';
$route['teachers/insert_validation'] = 'teachers/$1/insert_validation';
$route['teachers/success/:num'] = 'teachers/$1/success';
$route['teachers/delete/:num'] = 'teachers/$1/delete';
$route['teachers/edit/:num'] = 'teachers/$1/edit';
$route['teachers/update_validation/:num'] = 'teachers/$1/update_validation';
$route['teachers/update/:num'] = 'teachers/$1/update';
$route['teachers/ajax_list_info'] = 'teachers/$1/ajax_list_info';
$route['teachers/ajax_list'] = 'teachers/$1/ajax_list';
$route['teachers/read/:num'] = 'teachers/$1/read';
$route['teachers/export'] = 'teachers/$1/export';

# Courses
$route['courses'] = 'teachers';
$route['courses/add'] = 'courses/$1/add';
$route['courses/insert'] = 'courses/$1/insert';
$route['courses/insert_validation'] = 'courses/$1/insert_validation';
$route['courses/success/:num'] = 'courses/$1/success';
$route['courses/delete/:num'] = 'courses/$1/delete';
$route['courses/edit/:num'] = 'courses/$1/edit';
$route['courses/update_validation/:num'] = 'courses/$1/update_validation';
$route['courses/update/:num'] = 'courses/$1/update';
$route['courses/ajax_list_info'] = 'courses/$1/ajax_list_info';
$route['courses/ajax_list'] = 'courses/$1/ajax_list';
$route['courses/read/:num'] = 'courses/$1/read';
$route['courses/export'] = 'courses/$1/export';

#Student Courses

$route['studentcourses'] = 'studentcourses/list';
$route['studentcourses/list'] = 'studentcourses/draw';