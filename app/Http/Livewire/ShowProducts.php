<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Product;
use App\Category;
use App\Attribute;

use Illuminate\Support\Str;

class ShowProducts extends Component
{
    use WithPagination;

    protected $listeners = ['sliderUpdated','boolUpdated','categUpdated','rateUpdated','orderUpdated','reinit'];
    public $orderBy;
    public $orderDirection;
    public $search;
    public array $valuesFilter = array();
    public array $bool = array();
    public $category;
    public $rate;
    public $isCateg;

    /* Constructeur */
    public function mount(){
        $filtersBool = Attribute::where("type","radio_btn")->get();
        foreach($filtersBool as $filter){
            $this->bool[$filter->name]=false;
        }
        $this->orderBy="id";
        $this->orderDirection="asc";
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    /* Affichage */
    public function render()
    {
        $query = Product::search(trim($this->search));

        /* Gestion des catégories et sous catégories*/
        if($this->category ?? false){
            $query->where('category_id', $this->category);
            foreach(Category::find($this->category)->childs as $sub){
                $query->orWhere('category_id', $sub->id);
            }
        }
        /*
        if($this->rate ?? false){
            $query->where('average_rating', ">=",$this->rate);
        }*/

        
        
        /* Gestion des sliders */
        foreach($this->valuesFilter as $name=>$value){
            $name = preg_replace("/[^A-Za-z0-9]/", "", Str::camel($name));
            if(is_array($value)){
                if(isset($value["min"])){
                    $query->where($name,">=",$value["min"]);    
                }
                if(isset($value["max"])){
                    $query->where($name,"<=",$value["max"]);    
                }
            } else {
                $query->where($name,$value);
            }
        }

        

        /* Gestion des checkboxes */
        foreach($this->bool as $name=>$bool_value){
            $name = preg_replace("/[^A-Za-z0-9]/", "", Str::camel($name));
            if($bool_value){
                $query->where($name,$bool_value);
            }
        }

        /* Finalisation de la requête */
       $products = $query->get();
       $rate = $this->rate;
       $orderBy = $this->orderBy;
       $orderDirection = $this->orderDirection;
       $productsItems = $products->filter(function($value,$index) use ($rate){
        if($value->reviews->count()>0){
            return $value->reviews->avg("global_rate")>$rate;
        }
        return true;
       }) ->sortBy(function($product, $key) use ($orderBy, $orderDirection){
            if($orderBy=="id")
            {
                return $product->id;
            } else {
                if($product->reviews->count()>0) {
                    if($orderDirection=="asc"){
                        return $product->reviews->avg("global_rate");
                    } else {
                        return -$product->reviews->avg("global_rate");
                    }
                } else {
                    return 0;
                }
            }
            
       });


       $products = $productsItems->paginate(9);
       
        

        /* Définition des filtres numériques (ie sliders) */
        $filtersNum = Attribute::where("type","number")->get();

        foreach($filtersNum as $filter){
            $filter->min = Product::min($filter->name);
            $filter->max = Product::max($filter->name);
        }

        /* Définition des filtres booléens (ie checkboxes) */
        $filtersBool = Attribute::where("type","radio_btn")->get();

        /* Appel à la vue */ 
        return view(
            'livewire.show-products',
            [
                'products'=>$products,
                'filtersNum'=>$filtersNum,
                'filtersBool'=>$filtersBool,
                'orderBy'=>$orderBy,
                'orderDirection'=>$orderDirection
            ]
        );
    }

    /* Event : mise à jour d'un slider */
    public function sliderUpdated($data){
        if($data["name"]!="init"){
            $this->valuesFilter[$data["name"]]["min"] = $data["values"][0];
            $this->valuesFilter[$data["name"]]["max"] = $data["values"][1];
        }
    }

    /*Event : mise à jour de l'ordre */
    public function orderUpdated($data){
        $this->orderBy = $data["orderBy"];
        $this->orderDirection = $data["orderDirection"];
    }

    /* Event : mise à jour d'une checkbox */
    public function boolUpdated($name){
        $this->bool[$name] = !$this->bool[$name];
    }

    /* Event : mise à jour d'une catégorie */
    public function categUpdated($category){
        $this->category=$category;
    }

    /* Event : mise à jour d'une note */
    public function rateUpdated($rate){
        $this->rate=$rate;
    }

    public function reinit(){
        
        return redirect(request()->header('Referer'));
    }

}
