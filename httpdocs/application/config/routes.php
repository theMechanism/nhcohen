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

$route['default_controller'] = "home";
$route['404_override'] = 'error_404';

$route['about-us/in-the-news'] = 'about_us/in_the_news';
$route['about-us/our-approach'] = 'about_us/our_approach';
$route['about-us/in-the-news/(:any)'] = 'about_us/in_the_news/$1';
$route['about-us/for-sponsors'] = 'about_us/for_sponsors';
$route['about-us/for-sponsors/(:any)'] = 'about_us/for_sponsors/$1';
$route['about-us'] = 'about_us';
$route['about-us/(:any)'] = 'about_us/$1';
$route['for-investors/opening-an-account'] = 'for_investors/opening_an_account';
$route['for-investors/opening-an-account/(:any)'] = 'for_investors/opening_an_account/$1';
$route['for-investors/accredited-investing'] = 'for_investors/accredited_investing';
$route['for-investors/accredited-investing/(:any)'] = 'for_investors/accredited_investing/$1';
$route['for-investors/tax-advantage'] = 'for_investors/tax_advantage';
$route['for-investors/tax-advantage/(:any)'] = 'for_investors/tax_advantage/$1';
$route['for-investors'] = 'for_investors';
$route['for-investors/(:any)'] = 'for_investors/$1';
$route['business-continuity-plan-disclosure'] = 'sitemap/business_continuity_plan_disclosure';
$route['terms-of-use'] = 'terms/terms_of_use';

/* End of file routes.php */
/* Location: ./application/config/routes.php */
