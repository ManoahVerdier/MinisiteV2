<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function parent_category(){
        return $this->belongsTo(Category::class,"parent_id","id");
    }

    public function childs(){
        return $this->hasMany(Category::class,"parent_id","id");
    }

    public function scopeSearch($query, $term){
        $term = "%$term%";
        $query->where(
            function($query) use ($term){
                $query->where('name','like',$term);
            }
        );
    }
}
