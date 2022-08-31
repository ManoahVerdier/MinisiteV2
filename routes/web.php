<?php
/** 
 * Page routes du web
 * 
 * PHP version 7.3
 * 
 * @category Routes
 * @package  Routes
 * @author   Manoah Verdier <verdier.developpement@gmail.com>
 * @license  http://certificationiso.fr/mentions-legales Custom Licence
 * @link     http://certificationiso.fr
 */
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\UserInterfaceController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\ExtensionController;
use App\Http\Controllers\PageLayoutController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MiscellaneousController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ChartsController;

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

Route::get('/', 'SiteController@homepage');


Route::get('/p/{slug}', 'SiteController@page')
    ->name('page');
Route::get('/produit/{slug}', 'SiteController@produit')
    ->name('produit');
    Route::get('/produits/{search}', 'SiteController@produits')
    ->name('produits');
    Route::get('/produits', 'SiteController@produits')
    ->name('produitsInit');

Route::post('/recherche', ['as'=>'recherche','uses'=>'SiteController@recherche']);
Route::get('/recherche', 'SiteController@rechercheGet');
Route::get('/rechercheAjax/{search}', 'SiteController@rechercheAjax')->name("rechercheAjax");

Route::get('/mentions-legales', 'SiteController@mentionsLegales')
    ->name('mentions_legales');
Route::get('/infos-pratiques', 'SiteController@infosPratiques')
    ->name('infos_pratiques');
Route::get('/cgv', 'SiteController@cgv')
    ->name('cgv');
Route::get('/demarche-qualite', 'SiteController@demarcheQualite')
    ->name('demarche_qualite');
Route::get('/a-propos-nous', 'SiteController@aPropos')
    ->name('aPropos');

Route::get('/faqs', 'SiteController@faqs')->name('faqs');
Route::get('/faq/{slug}', 'SiteController@faq')->name('faq_slug');
Route::get('/faq_categ/{slug}', 'SiteController@categorieFaq')->name('faq_categ');
Route::get('/category/{slug}', 'SiteController@category')->name('category');
Route::get('/categories', 'SiteController@categories')->name('categories');

Route::group(
    ['prefix' => 'admin'], 
    function () {
        Voyager::routes();
    }
);


Route::get('/auth/redirect/{slug}', 'SiteController@redirect')->name("auth.redirect.slug");
Route::get('/auth/redirect', 'SiteController@redirect')->name("auth.redirect");
Route::get('/auth/callback','SiteController@callback');

Route::get('/addComparison/{id}','SiteController@addComparison')->name("addComparison");
Route::get('/delComparison','SiteController@delComparison')->name("delComparison");

Route::get('/comparatif','SiteController@comparatif')->name("comparatif");

Route::post("/review", "SiteController@addReview")->name("review");

Route::get('blog/list', [PagesController::class, 'blog_list'])->name('page-blog-list');
Route::get('ecommerce/shop', [AppsController::class, 'ecommerce_shop'])->name('app-ecommerce-shop');