<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
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

$route['default_controller'] = "home";
$route['provider/check_duplicate_email']='provider/check_duplicate_email';
$route['provider/profile']='provider/profile';
$route['provider/signup']='provider/signup';
$route['provider/signin']='provider/signin';
$route['provider/login']='provider/login';
$route['provider/forgot']='provider/forgot';
$route['provider/term_condition']='provider/term_condition';
$route['provider/become_member']='provider/become_member';
$route['provider/send_invitation']='provider/send_invitation';
$route['browse_black_list/black_list_review_detail/(:any)']='browse_black_list/black_list_review_detail/$1';
$route['browse_black_list/index/(:any)']='browse_black_list/index/$1';
$route['provider/client_search_listing/(:any)']='provider/client_search_listing/$1';
$route['provider/client_detail/(:any)']='provider/client_detail/';
$route['provider/provider_detail/(:any)']='provider/provider_detail/';

$route['client/signup']='client/signup';
$route['client/login']='client/login';
$route['client/forgot']='client/forgot';

$route['report_incident/(:any)'] = "report_incident";
$route['report_incident/create_report_incident'] = "report_incident/create_report_incident";
$route['report_incident/(:any)'] = "report_incident";
$route['report_incident/edit_incident_report/(:any)'] = "report_incident/edit_incident_report";


$route['reviews/edit_review/(:any)'] = "reviews/edit_review";
$route['reviews/related_reviews_listing/(:any)'] = "reviews/related_reviews_listing";
$route['reviews/review_listing/(:any)'] = "reviews/review_listing";
$route['reviews/review_detail/(:any)'] = "reviews/review_detail";
$route['reviews/create_review'] = "reviews/create_review";

$route['admin/providers/approve_action']='admin/providers/approve_action';
$route['admin/providers/detail/(:any)']='admin/providers/detail';
$route['admin/providers/point_received/(:any)']='admin/providers/point_received';
$route['admin/providers/(:any)']='admin/providers';


$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */