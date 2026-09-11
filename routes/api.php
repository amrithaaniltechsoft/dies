<?php

use App\Http\Controllers\Api\CmsPageController;
use App\Http\Controllers\Api\ContactSettingController;
use App\Http\Controllers\Api\CoreExpertiseController;
use App\Http\Controllers\Api\CtaContactController;
use App\Http\Controllers\Api\EnquiryController;
use App\Http\Controllers\Api\FooterAboutController;
use App\Http\Controllers\Api\HeroSettingController;
use App\Http\Controllers\Api\HomeAboutController;
use App\Http\Controllers\Api\HomeAdvantageController;
use App\Http\Controllers\Api\HomeCapabilityController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SeoSettingController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\WhyChooseUsController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{slug}', [ProductController::class, 'show']);

Route::get('/services', [ServiceController::class, 'index']);
Route::get('/services/{slug}', [ServiceController::class, 'show']);

Route::get('/cms/{page}', [CmsPageController::class, 'show']);

Route::get('/seo/{page}', [SeoSettingController::class, 'show']);

Route::get('/contact', [ContactSettingController::class, 'show']);

Route::get('/cta-contact', [CtaContactController::class, 'show']);

Route::get('/footer-about', [FooterAboutController::class, 'show']);

Route::get('/hero-settings', [HeroSettingController::class, 'show']);

Route::get('/home-advantages', [HomeAdvantageController::class, 'show']);

Route::get('/about-section', [HomeAboutController::class, 'show']);

Route::get('/core-expertise', [CoreExpertiseController::class, 'show']);

Route::get('/capabilities', [HomeCapabilityController::class, 'show']);

Route::get('/why-choose-us', [WhyChooseUsController::class, 'show']);

Route::post('/enquiries', [EnquiryController::class, 'store']);