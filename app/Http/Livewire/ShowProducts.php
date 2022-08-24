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

    protected $listeners = ['sliderUpdated','boolUpdated','categUpdated','reinit'];
    public $orderBy = 'id';
    public $search;
    public array $valuesFilter = array();
    public array $bool = array();
    public $category;
    public $isCateg;

    /* Constructeur */
    public function mount(){
        $filtersBool = Attribute::where("type","radio_btn")->get();
        foreach($filtersBool as $filter){
            $this->bool[$filter->name]=false;
        }
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
        $products = $query->orderBy($this->orderBy)->paginate(6);

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
                'filtersBool'=>$filtersBool
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

    /* Event : mise à jour d'une checkbox */
    public function boolUpdated($name){
        $this->bool[$name] = !$this->bool[$name];
    }

    /* Event : mise à jour d'une catégorie */
    public function categUpdated($category){
        $this->category=$category;
    }

    public function reinit(){
        if (!$this->isCateg) {
            $this->category=null;
        }

        $filtersBool = Attribute::where("type","radio_btn")->get();
        foreach($filtersBool as $filter){
            $this->bool[$filter->name]=false;
        }

        $this->valuesFilter = array();
    }

}
