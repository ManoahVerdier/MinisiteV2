<?php

/**
 * SiteController.php
 * 
 * PHP version 7.3
 * 
 * @category SiteController
 * @package  Controllers
 * @author   Manoah Verdier <verdier.developpement@gmail.com>
 * @license  http://certificationiso.fr/mentions-legales Custom Licence
 * @link     http://certificationiso.fr
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Page;
use App\Product;
use App\Review;
use App\Faq;
use App\FaqCategory;
use App\Homepage;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Mail;
use DB;

/**
 * Classe Controller principal des pages
 *
 * @category SiteController
 * @package  Controllers
 * @author   Manoah Verdier <verdier.developpement@gmail.com>
 * @license  http://certificationiso.fr/mentions-legales Custom Licence
 * @link     http://certificationiso.fr
 */
class SiteController extends Controller
{
    /**
     * Gestion de la page d'accueil
     *
     * @return void
     */
    public function homepage()
    {
        $hp = Homepage::first();
        $produits = Product::all()->take(5);
        $produitsRecents = Product::all()->sortByDesc("created_at")->take(5);
        $pageConfigs = ['contentLayout' => 'content-detached-right-sidebar', 'bodyClass' => 'content-detached-right-sidebar'];
        return view('home', compact('hp','produits','produitsRecents','pageConfigs'));
    }

    /**
     * Page mentions légales
     *
     * @return void
     */
    public function mentionsLegales()
    {
        $page=Page::where('slug', 'mentions-legales')->firstOrFail();
        return view('page', compact('page'));
    }

    /**
     * Page infos pratiques
     *
     * @return void
     */
    public function infosPratiques()
    {
        $page=Page::where('slug', 'infos-pratiques')->firstOrFail();
        return view('page', compact('page'));
    }

    /**
     * Page cgv
     *
     * @return void
     */
    public function cgv()
    {
        $page=Page::where('slug', 'cgv')->firstOrFail();
        return view('page', compact('page'));
    }

    /**
     * Page demarche qualite
     *
     * @return void
     */
    public function demarcheQualite()
    {
        $page=Page::where('slug', 'demarche-qualite')->firstOrFail();
        return view('page', compact('page'));
    }

    /**
     * Page à propos de nous
     *
     * @return void
     */
    public function aPropos()
    {
        $page=Page::where('slug', 'a-propos-nous')->firstOrFail();
        return view('page', compact('page'));
    }

    
    /**
     * Page index des catégories de faq
     *
     * @return void
     */
    public function faqs()
    {
        $configData = $pageConfigs = [
            'contentLayout' => "content-detached-no-sidebar",
            'pageClass' => 'faqs',
        ];
        $breadcrumbs = [
            ['link' => "/", 'name' => "Accueil"], ['name' => "FAQs"]
        ];
        
        $title = "FAQs";

        $faqs = Faq::all();
        return view("faqs", compact("faqs", "pageConfigs", "configData", "breadcrumbs", "title"));
        
    }

    /**
     * Page index des pages
     *
     * @return void
     */
    public function pages()
    {
        $pages = Page::whereNotIn(
            "slug", 
            [
                'cgv', 
                'nos-partenaires', 
                'a-propos-nous', 
                'demarche-qualite', 
                'nos-clients',
                'mentions-legales',
                'audit-interne-qualite-externalise'
            ]
        )->get();
        
        return view('pages', compact('pages'));
    }

    /**
     * Page index des faqs d'une catégorie
     *
     * @param string $categSlug le slug de la catégorie
     * 
     * @return void
     */
    public function categorieFaq($categSlug)
    {
        $faq_categ = FaqCategory::where('slug', $categSlug)->firstOrFail();
        return view('faq_category', compact('faq_categ'));
    }

    /**
     * Page d'une faq
     *
     * @param string $slug le slug de la question
     * 
     * @return void
     */
    public function faq($slug)
    {
        $faq = Faq::where('slug', $slug)->firstOrFail();
        $taglessTitle = html_entity_decode(strip_tags($faq->question), ENT_QUOTES, 'UTF-8');
        return view('faq', compact('faq', 'taglessTitle'));
    }

    /**
     * Page spécifique
     *
     * @param string $slug le slug de la page
     * 
     * @return void
     */
    public function page($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('page', compact('page'));
        //return view('page', compact('page'));
    }

    /**
     * Page produit spécifique
     *
     * @param string $slug le slug de la page
     * 
     * @return void
     */
    public function produit($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $product->stars=4;
        $compared=false;
        session("redirect",route("produit",["slug"=>$slug]));
        if(session()->has("productsComparedLst")) {
            $productsCompared = session("productsComparedLst");
            if($productsCompared->contains("id",$product->id)){
                $compared=true;
            }
        }

        return view('page_produit', compact('product','compared'));
    }

    /**
     * Liste filtrable des produits
     * 
     * @return void
     */
    public function produits($search="")
    {

        $pageConfigs = [
            'contentLayout' => "content-detached-left-sidebar",
            'pageClass' => 'ecommerce-application',
        ];

        $breadcrumbs = [
            ['link' => "/", 'name' => "Accueil"], ['name' => "Tous les produits"]
        ];


        return view('/products', [
            'pageConfigs' => $pageConfigs,
            'breadcrumbs' => $breadcrumbs,
            'search'      => $search
        ]);
    }


    /**
     * Page recherche
     * 
     * @return void
     */
    public function rechercheGet()
    {
        return view('recherche');
    }

    /**
     * Page recherche
     * 
     * @return void
     */
    public function rechercheAjax($search)
    {
        $products=Product::search($search)
                            ->get();
        $categs = Category::where("name","LIKE","%$search%")->get();
        return '{
            "products":'.$products->toJSON().',
            "categories":'.$categs->toJSON()."
        }";
        //return view('recherche');
    }

    /**
     * Traitement du formulaire de recherche et affichage des résultats
     * 
     * @param Request $request les données postées
     * 
     * @return void
     */
    public function recherche(Request $request)
    {
        $term = $request->get('search');
        
        return redirect()->action([SiteController::class,"produits"],["search"=>$term]);

        //return view('recherche', compact('pages', 'search'));
    }

    /**
     * Page index des produits d'une catégorie
     *
     * @param string $categSlug le slug de la catégorie
     * 
     * @return void
     */
    public function category($categSlug)
    {
        $category = Category::where('slug', $categSlug)->firstOrFail();
        $pageConfigs = [
            'contentLayout' => "content-detached-left-sidebar",
            'pageClass' => 'ecommerce-application',
        ];
        $breadcrumbs = [
            ['link' => "/", 'name' => "Accueil"], ['link' => "/categories", 'name' => "Catégories"], ['name' => $category->name]
        ];
        
        $title = $category->name;

        return view('category', compact('category','pageConfigs','breadcrumbs','title'));
    }

    /**
     * Page index des categories
     * 
     * @return void
     */
    public function categories()
    {
        $categories = Category::where("parent_id",null)->get();
        $configData = $pageConfigs = [
            'contentLayout' => "content-detached-no-sidebar",
            'pageClass' => 'ecommerce-application',
        ];
        $breadcrumbs = [
            ['link' => "/", 'name' => "Accueil"], ['name' => "Catégories"]
        ];
        
        $title = "Catégories";

        return view('categories', compact('categories','pageConfigs','breadcrumbs','title', 'configData'));
    }

    
    public function redirect($slug=""){
        //session("redirect",route("produit",["slug"=>$slug]));
        return Socialite::driver('linkedin')->redirect();
    }

    public function callback(){
        $user = Socialite::driver('linkedin')->user();
        //dd($user);
    }

    public function addComparison($id){
        $product = Product::find($id);
        
        if(session()->has("productsComparedLst")) {
            $productsComparedLst = session("productsComparedLst");
            if(! $productsComparedLst->contains('id', $id)){
                $productsComparedLst->prepend($product);
            } else {
                $productsComparedLst = $productsComparedLst->reject(function($value, $key) use ($id){
                    return $value->id==$id;
                });
                if($productsComparedLst->count() >= 3){
                    session(['productsComparedLst'=>$productsComparedLst->range(0,2)]);
                } else {
                    session(['productsComparedLst'=>$productsComparedLst]);
                }
                return false;
            }
   
        } else {
            $productsComparedLst = collect([$product]);
        }

        if($productsComparedLst->count() >= 3){
            session(['productsComparedLst'=>$productsComparedLst->splice(0,3)]);
        } else {
            session(['productsComparedLst'=>$productsComparedLst]);
        }

        return true;
    }
    public function delComparison(){
        session(['productsComparedLst'=>collect([])]);
    }

    public function comparatif(){
        $configData = $pageConfigs = [
            'contentLayout' => "content-detached-no-sidebar",
            'pageClass' => 'comparatif',
        ];
        $breadcrumbs = [
            ['link' => "/", 'name' => "Accueil"], ['name' => "Comparatif"]
        ];
        
        $title = "Catégories";
        if(session()->has("productsComparedLst")) {
            $products = session("productsComparedLst");
        } else {
            $products = collect([]);
        }
        return view("comparatif", compact("products", "pageConfigs", "configData", "breadcrumbs", "title"));
    }

    public function addReview(Request $request){
        $review = Review::create($request->except("_token"));

        return redirect()->route("produit",["slug"=>Product::find($review->product_id)->slug]);
    }
}
