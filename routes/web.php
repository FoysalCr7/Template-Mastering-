<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'StorolaController@index')->name('/');
Route::get('/page-home-2', 'StorolaController@secondHome')->name('/page-home-2');
Route::get('/page-home-3', 'StorolaController@thirdHome')->name('/page-home-3');
Route::get('/checkout', 'StorolaController@checkOut')->name('/checkout');
Route::get('/faq', 'StorolaController@faQ')->name('/faq');
Route::get('/coming-soon', 'StorolaController@comingSoon')->name('/coming-soon');
Route::get('/not-found', 'StorolaController@notFound')->name('/not-found');


Route::get('/my-account', 'UserController@myAccount')->name('/my-account');


Route::get('/page-contact', 'AboutController@contactUs')->name('/page-contact');
Route::get('/page-aboutus', 'AboutController@aboutUs')->name('/page-aboutus');


Route::get('/blog-page', 'BlogsController@blogPage')->name('/blog-page');
Route::get('/single-blog-page', 'BlogsController@singleBlog')->name('/single-blog-page');


Route::get('/product-list', 'ProductController@prioductList')->name('/product-list');
Route::get('/product-details', 'ProductController@productDetails')->name('/product-details');
Route::get('/all-products', 'ProductController@allProducts')->name('/all-products');

Route::get('/admin/home', 'StorolaController@adminHome')->name('/admin/home');
Route::get('/admin/add-customer', ' CustomerController@addCustomer')->name('/admin/add-customer');
Route::get('/admin/manege-customer', ' CustomerController@manegeCustomer')->name('/admin/manege-customer');
Route::get('/admin/unregister-customer', ' CustomerController@unregisterCustomer')->name('/admin/unregister-customer');
Route::get('/admin/add-user', ' CustomerController@addUser')->name('/admin/add-user');
Route::get('/admin/manege-user', ' CustomerController@addUser')->name('/admin/manege-user');


Route::get('/admin/add-order', ' OrderController@addOrder')->name('/admin/add-order');
Route::get('/admin/new-order', ' OrderController@newOrder')->name('/admin/new-order');
Route::get('/admin/complete-order', ' OrderController@completeOrder')->name('/admin/complete-order');
Route::get('/admin/ongoing-order', ' OrderController@ongoingOrder')->name('/admin/ongoing-order');

Route::get('/admin/add-product', 'ProductController@addProduct')->name('/admin/add-product');
Route::get('/admin/manege-product', 'ProductController@manegeProduct')->name('/admin/manege-product');

Route::get('/admin/add-category', 'CategoryController@addCategory')->name('/admin/add-category');
Route::get('/admin/manege-category', 'CategoryController@manegeCategory')->name('/admin/manege-category');

Route::get('/admin/add-addons', 'AddonsController@addAddons')->name('/admin/add-addons');
Route::get('/admin/manege-addons', 'AddonsController@manegeAddons')->name('/admin/manege-addons');

Route::get('/admin/add-design', 'AddonsController@addDesign')->name('/admin/add-design');
Route::get('/admin/manege-design', 'AddonsController@manegeDesign')->name('/admin/manege-design');

Route::get('/admin/add-page', 'PageController@addPage')->name('/admin/add-page');
Route::get('/admin/manege-page', 'PageController@manegePage')->name('/admin/manege-page');
Route::get('/admin/homepage-setting', 'PageController@homepageSetting')->name('/admin/homepage-setting');
Route::get('/admin/social-network', 'PageController@socialNetwork')->name('/admin/social-network');

Route::get('/admin/add-menu', 'MenuController@addMenu')->name('/admin/add-menu');
Route::get('/admin/manege-menu', 'MenuController@manegeMenu')->name('/admin/manege-menu');

Route::get('/admin/widget-top', 'WidgetController@widgetTop')->name('/admin/widget-top');
Route::get('/admin/widget-leftside', 'WidgetController@widgetLeftside')->name('/admin/widget-leftside');
Route::get('/admin/widget-rightside', 'WidgetController@widgetRightside')->name('/admin/widget-rightside');
Route::get('/admin/widget-content', 'WidgetController@widgetContent')->name('/admin/widget-content');
Route::get('/admin/widget-footer', 'WidgetController@widgetFooter')->name('/admin/widget-footer');
Route::get('/admin/widget-statics', 'WidgetController@widgetStatics')->name('/admin/widget-statics');
Route::get('/admin/widget-homecontrol', 'WidgetController@widgetHomecontrol')->name('/admin/widget-homecontrol');


Route::get('/admin/setting-siteinformation', 'SettingController@siteInformation')->name('/admin/setting-siteinformation');
Route::get('/admin/setting-sellerrate', 'SettingController@sellerRate')->name('/admin/setting-sellerrate');
Route::get('/admin/setting-order-status-condition', 'SettingController@orderStatus')->name('/admin/setting-order-status-condition');
Route::get('/admin/setting-offer', 'SettingController@Offer')->name('/admin/setting-offer');
Route::get('/admin/setting-payment-setting', 'SettingController@paymentSetting')->name('/admin/setting-payment-setting');
Route::get('/admin/setting-external-code', 'SettingController@externalCode')->name('/admin/setting-external-code');
Route::get('/admin/setting-log', 'SettingController@settingLog')->name('/admin/setting-log');
