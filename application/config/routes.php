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
$route['objetivos-de-desarrollo-sostenible'] = 'Welcome/home';
$route['objetivos-de-desarrollo-sostenible/fin-de-la-pobreza'] = 'Welcome/objetivo/1';
$route['objetivos-de-desarrollo-sostenible/hambre-cero'] = 'Welcome/objetivo/2';
$route['objetivos-de-desarrollo-sostenible/salud-y-bienestar'] = 'Welcome/objetivo/3';
$route['objetivos-de-desarrollo-sostenible/educacion-de-calidad'] = 'Welcome/objetivo/4';
$route['objetivos-de-desarrollo-sostenible/igualdad-de-genero'] = 'Welcome/objetivo/5';
$route['objetivos-de-desarrollo-sostenible/agua-limpia-y-saneamiento'] = 'Welcome/objetivo/6';
$route['objetivos-de-desarrollo-sostenible/energia-asequible-y-no-contaminante'] = 'Welcome/objetivo/7';
$route['objetivos-de-desarrollo-sostenible/trabajo-decente-y-crecimiento-economico'] = 'Welcome/objetivo/8';
$route['objetivos-de-desarrollo-sostenible/industria-innovacion-e-infraestructura'] = 'Welcome/objetivo/9';
$route['objetivos-de-desarrollo-sostenible/reduccion-de-las-desigualdades'] = 'Welcome/objetivo/10';
$route['objetivos-de-desarrollo-sostenible/ciudades-y-comunidades-sostenibles'] = 'Welcome/objetivo/11';
$route['objetivos-de-desarrollo-sostenible/produccion-y-consumo-responsables'] = 'Welcome/objetivo/12';
$route['objetivos-de-desarrollo-sostenible/accion-por-el-clima'] = 'Welcome/objetivo/13';
$route['objetivos-de-desarrollo-sostenible/vida-submarina'] = 'Welcome/objetivo/14';
$route['objetivos-de-desarrollo-sostenible/vida-de-ecosistemas-terrestres'] = 'Welcome/objetivo/15';
$route['objetivos-de-desarrollo-sostenible/paz-justicia-e-instituciones-solidas'] = 'Welcome/objetivo/16';
$route['objetivos-de-desarrollo-sostenible/alianzas-para-lograr-los-objetivos'] = 'Welcome/objetivo/17';
