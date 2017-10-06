<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller']	 		= 'Main';
$route['404_override'] 					= '';




//estado
$route['estados']					     = 'main/listado_estados';
$route['procesando_cat_estados']    = 'main/procesando_cat_estados';

$route['nuevo_estado']                  = 'main/nuevo_estado';
$route['validar_nuevo_estado']          = 'main/validar_nuevo_estado';

$route['editar_estado/(:any)']			 = 'main/editar_estado/$1';
$route['validacion_edicion_estado']     = 'main/validacion_edicion_estado';

$route['eliminar_estado/(:any)/(:any)'] = 'main/eliminar_estado/$1/$2';
$route['validar_eliminar_estado']    	 = 'main/validar_eliminar_estado';


//tipos de obras
$route['tipos']					     = 'main/listado_tipos';
$route['procesando_cat_tipos']    = 'main/procesando_cat_tipos';

$route['nuevo_tipo']                  = 'main/nuevo_tipo';
$route['validar_nuevo_tipo']          = 'main/validar_nuevo_tipo';

$route['editar_tipo/(:any)']			 = 'main/editar_tipo/$1';
$route['validacion_edicion_tipo']     = 'main/validacion_edicion_tipo';

$route['eliminar_tipo/(:any)/(:any)'] = 'main/eliminar_tipo/$1/$2';
$route['validar_eliminar_tipo']    	 = 'main/validar_eliminar_tipo';


//obras de obras
$route['obras']					     = 'main/listado_obras';
$route['procesando_cat_obras']    = 'main/procesando_cat_obras';

$route['nuevo_obra']                  = 'main/nuevo_obra';
$route['validar_nuevo_obra']          = 'main/validar_nuevo_obra';

$route['editar_obra/(:any)']			 = 'main/editar_obra/$1';
$route['validacion_edicion_obra']     = 'main/validacion_edicion_obra';

$route['eliminar_obra/(:any)/(:any)'] = 'main/eliminar_obra/$1/$2';
$route['validar_eliminar_obra']    	 = 'main/validar_eliminar_obra';





/*
$route['login']							= 'main/login';
$route['forgot']						= 'main/forgot';
$route['session']						= 'main/session';




///////////////////////////////main///////////////////////////////////////
$route['respaldar']					= 'respaldo/respaldar';
$route['catalogo_modal/(:any)/(:any)']					    = 'main/catalogo_modal/$1/$2';
$route['validar_catalogo_modal']    						= 'main/validar_catalogo_modal';
*/