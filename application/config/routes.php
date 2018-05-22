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
$route['admin-form']='admin/form';/* This is manually linking */
$route['admin-registration']='admin/admin_registration';

$route['dashboard']='admin/show_dashboard';
$route['admin-dashboard']='admin/show_dashboard';

/*===========================product related routes start======================================= */
$route['product-add']='product/add_product'; //This is Actually Add Category
$route['add-product']='product/product_add'; //This is product add form
$route['save-add-product-form']='product/save_product';
$route['product-show']='product/get_product_details';
$route['manage-product']='product/get_product_details';
$route['edit-product/(.+)']='product/edit_product/$1';
$route['delete-product/(.+)']='product/delete_product/$1';
$route['change-product-status/(.+)/(.+)']='product/change_product_status/$1/$2';
$route['product-details/(.+)']='welcome/product_details/$1'; //Details e click korar por ekane asbe

/*===========================product related routes end======================================= */

$route['category-add']='product/add_category'; /*==============for add category======*/

$route['category-show']='product/get_category';

$route['manage-category']='product/get_category'; /* just take the added view page with extra field action so that we can manage */



/*============================product related routes end=================================== */

/*====================================active or inactive related start====================*/

$route['edit-category/(.+)']='product/edit_category/$1';
$route['edited-category']='product/edited_category';/* when we edit a form and press it for edit */

$route['change-category-status/(.+)/(.+)']='product/change_category_status/$1/$2';/*passes a value that
2 in href with routing this (.+) represents that passed variable(2) and in R.H.S $1 means this is a variable that
whice value is 2 which was passed */
/* ekane jehutu ami array theke variable baniye pass kortesi like ($categoryDetailsID=$categoryDetails['category_id'])
tai (.+) ekta dibo,,kintu jdi ami evabe kortam base_url("change-category-status/$categoryDetails->category_id/2") mane object akare tahole amake
$route['change-category-status/(.+)/(.+)'] dite hoito,,mane arekta append korte hoito */


/*====================================active or inactive related end========================================*/

$route['admin-logout']='admin_login/logout';
//$route['admin-registration']='admin/admin_registration_form';
$route['admin-form_test']='admin/form_test'; /* This is dynamic linking */

$route['admin-login']='admin_login/index';
$route['admin-check'] = 'admin_login/checkAdminLogin';




/*=======================================Manufacturer related start =========================================*/
$route['add-manufacturer']='manufacturer/add_manufacturer';
$route['save-add-manufacturer-form']='manufacturer/save_manufacturer';
$route['manufacturer-show']='manufacturer/get_manufacturer';/*view of manufacturer from database */
$route['edit-manufacturer/(.+)']='manufacturer/edit_manufacturer/$1';
$route['manage-manufacturer']='manufacturer/get_manufacturer';
$route['delete-manufacturer/(.+)']='manufacturer/delete_manufacturer/$1';
/*===========================================manufacturer end=================================================*/
/*===========================================Start Cart=================================================*/

$route['add-to-cart']='cart/add_to_cart';
$route['show-cart']='cart/show_cart';



$route['delete-to-cart/(.+)']='cart/delete_to_cart/$1';
$route['update-cart-product-quantity']='cart/update_cart_product_quantity';


/*===========================================End Cart=================================================*/

$route['checkout']='checkout/index';
$route['customer-registration']='checkout/registration';
$route['userLogout']='checkout/userLogout';
$route['userLogin']='checkout/userLogin';
/*==========================================Billing Related Route=================================================*/
$route['billing']='checkout/billing';
$route['update-billing']='checkout/updated_billing';
//$route['shipping/(.+)']='checkout/shipping/$1';
$route['shipping']='checkout/shipping';
$route['save-shipping']='checkout/save_shipping';
/*==============================payment gateway related============================================================*/

$route['payment']='checkout/payment';
$route['place-order']='checkout/place_order';
$route['ssl-payment']='checkout/ssl_payment';
$route['success']='checkout/success';
$route['fail']='checkout/fail';
$route['cancel']='checkout/cancel';
/*==============================Invoice related============================================================*/

$route['manage-invoice']='invoice/manage_invoice';

$route['default_controller'] = 'welcome';
$route['home-page'] = 'Home';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
