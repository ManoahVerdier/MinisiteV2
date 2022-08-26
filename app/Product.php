<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $appends = ["rating"];
    protected $with = ["avgReviews"];

    public function scopeSearch($query, $term){
        $term = "%$term%";
        $query->where(
            function($query) use ($term){
                $query->where('title','like',$term)
                    ->orWhere('description','like',$term);
            }
        );
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function avgReviews() {

        return $this->hasMany(Review::class)
            ->selectRaw('AVG(global_rate) AS average_rating')
            ->groupBy('product_id');
    }

    public function getRatingAttribute()
    {
        return $this->reviews->avg("global_rate");
    }
}
