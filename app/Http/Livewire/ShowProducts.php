<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Product;
use App\Attribute;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ShowProducts extends Component
{
    use WithPagination;

    /*protected $queryString = ['filters'];*/
    /*public array $filters;*/

    /*public $byRatingsAsc = null;
    public $byRatingsDesc = null;
    public $byFeatured = null;
*/

    protected $listeners = ['sliderUpdated','boolUpdated'];
    public $orderBy = 'id';
    public $search;
    public $valuesFilter = array();
    public $bool = array();
    public array $checkboxes;

    public function mount(){
        $filtersBool = Attribute::where("type","radio_btn")->get();
        foreach($filtersBool as $filter){
            $this->bool[$filter->name]=false;
            $this->checkboxes[$filter->name]=false;
        }
    }

    public function render()
    {
        DB::enableQueryLog();
        //$products = Product::paginate(5);
        $query = Product::search(trim($this->search));
        foreach($this->valuesFilter as $name=>$value){
            $name = preg_replace("/[^A-Za-z0-9]/", "", Str::camel($name));
            if(is_array($value)){
                if(isset($value["min"])){
                    $query->where($name,">",$value["min"]);    
                }
                if(isset($value["max"])){
                    $query->where($name,"<",$value["max"]);    
                }
            } else {
                $query->where($name,$value);
            }
            
        }

        
        foreach($this->bool as $name=>$bool_value){
            $name = preg_replace("/[^A-Za-z0-9]/", "", Str::camel($name));
            if($bool_value){
                $query->where($name,$bool_value);
            }
        }

            
        $products = $query->orderBy($this->orderBy)->paginate(5);
        
        /* Filtres numériques (ie sliders) */
        $filtersNum = Attribute::where("type","number")->get();

        foreach($filtersNum as $filter){
            $filter->min = Product::min($filter->name);
            $filter->max = Product::max($filter->name);
        }

        /* Filtres booléens (ie checkboxes) */
        $filtersBool = Attribute::where("type","radio_btn")->get();
        return view(
            'livewire.show-products',
            [
                'products'=>$products,
                'filtersNum'=>$filtersNum,
                'filtersBool'=>$filtersBool
            ]
        );
    }

    public function sliderUpdated($data){
        if($data["name"]!="init"){
            $this->valuesFilter[$data["name"]]["min"] = $data["values"][0];
            $this->valuesFilter[$data["name"]]["max"] = $data["values"][1];
        }
    }

    public function boolUpdated($name){
        $this->bool[$name] = !$this->bool[$name];

    }

}
