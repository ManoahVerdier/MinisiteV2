<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Collection;
use App\Product;
use App\Category;

use Illuminate\Support\Str;

class ShowCategories extends Component
{
    use WithPagination;

    public $orderBy = 'id';
    public $search;
    
    /* Affichage */
    public function render()
    {
        $categories = Category::search(trim($this->search))->orderBy($this->orderBy)->get();

        $mainCategories = new Collection();
        $subCategories = new Collection();
        foreach($categories as $category){
            if($category->parent_category ?? false){
                if(! $mainCategories->contains('id',$category->parent_category->id)){
                    $mainCategories->push($category->parent_category);
                }
                $subCategories->push($category);
            } else {
                if(! $mainCategories->contains('id',$category->id)){
                    $mainCategories->push($category);
                }
            }
        }

        
        
        /* Appel à la vue */ 
        return view(
            'livewire.show-categories',
            [
                'mainCategories'=>$mainCategories,
                'subCategories'=>$subCategories
            ]
        );
    }
}