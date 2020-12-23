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

// Homepage
Route::get('/', 'PageController@home');

// Contact Us
Route::get('/contact','PageController@contact');

// About Us
Route::get('/about','PageController@about');

// Our services
Route::get('/our-services','PageController@services');

// Our services E-commerce
Route::get('/e-commerce','PageController@commerce');

// Our services - E-commerce - Own Site
Route::get('/own-site','PageController@ownsite');

// Our services - E-commerce - Marketplace
Route::get('/marketplace','PageController@marketplace');

// Our services - E-commerce - Cross border
Route::get('/cross-border','PageController@crossborder');

// Our services - Payment solution
Route::get('/payment','PageController@payment');

// Our Insights
Route::get('/our-insights','PageController@insights');

// Our Insights Uniqueness of China ecommerce 
Route::get('/uniqueness-of-China-e-commerce','PageController@ChinaEcommerce');

// Our Insights cross-border e-commerce 
Route::get('/cross-border-e-commerce','PageController@crossBorderEcommerce');

// Our Insights growth-of-mobile-payment-solutions
Route::get('/growth-of-mobile-payment-solutions','PageController@growthOfMobilePaymentSolutions');

// Our Insights social media
Route::get('/social-media','PageController@socialMedia');

// Our Insights Trademark in China – do I need it? 
Route::get('/trademark-in-China', 'PageController@trademark');

// Our Insights Website optimization
Route::get('/website-optimization', 'PageController@websiteOptimization');

// Our Insights WeChat Mini Program
Route::get('/WeChat-Mini-Program', 'PageController@wechatMiniProgram');

// Our Insight The biggest eCommerce platforms in China 
Route::get('/the-biggest-eCommerce-platforms-in-China', 'PageController@biggestECommercePlatformsInChina');

// Our Insight Singles Day
Route::get('/new-singles-day-record-set-by-alibaba', 'PageController@singlesDay');

// Our Insights live streaming a natural part of your eCommerce strategy
Route::get('/live-streaming-a-natural-part-of-your-eCommerce-strategy', 'PageController@liveStreaming');

// mail route
Route::any('mail/send','MailController@send');