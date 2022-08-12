<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function scopeSearch($query, $term){
        $term = "%$term%";
        $query->where(
            function($query) use ($term){
                $query->where('title','like',$term)
                    ->orWhere('description','like',$term);
            }
        );
    }
}
