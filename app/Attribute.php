<?php

namespace App;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;

class Attribute extends Model
{


    protected static function booted()
    {
        static::created(function ($attribute) {
            
            Schema::table('products', function (Blueprint $table) use ($attribute){
                $options = array();
                $name = preg_replace("/[^A-Za-z0-9]/", "", Str::camel($attribute->name));
                switch($attribute->type){
                    case "text" : 
                        $table->text($name)->nullable();
                    break;
                    case "rich_text_box" : 
                        $table->text($name)->nullable();
                    break;
                    case "number" :
                        $table->Integer($name)->nullable();
                    break;
                    case "radio_btn" :
                        $table->Boolean($name)->nullable();
                        $options["default"] = "1";
                        $options["options"] = array("1"=> "Oui","0"=> "Non");
                    break;
                }
                $dr = DataRow::create([
                    'data_type_id'=>DataType::where("name","products")->first()->id,
                    'field'=> $name,
                    'type'=>$attribute->type,
                    'display_name'=>$attribute->displayName,
                    'required'=>0,
                    'browse'=>1,
                    'read'=>1,
                    'edit'=>1,
                    'add'=>1,
                    'delete'=>1,
                    'details'=>"",
                    'order'=>DataRow::where("data_type_id",DataType::where("name","products")->first()->id)->max('order')+1
                ]);
                $dr->setDetailsAttribute($options);
                $dr->save();
            });

            //
        });

        static::updated(function ($attribute) {

            Schema::table('products', function (Blueprint $table) use ($attribute){
                $options = array();
                $name = preg_replace("/[^A-Za-z0-9]/", "", Str::camel($attribute->name));        
                switch($attribute->type){
                    case "text" : 
                        $table->text($name)->change();
                    break;
                    case "rich_text_box" : 
                        $table->text($name)->change();
                    break;
                    case "number" :
                        $table->Integer($name)->change();
                    break;
                    case "radio_btn" :
                        $table->Boolean($name)->change();
                        $options["default"] = "1";
                        $options["options"] = array("1"=> "Oui","0"=> "Non");
                    break;
                }
                $dr = DataRow::where("data_type_id",DataType::where("name","products")->first()->id)->where("field",$name)->first();
                $dr->type = $attribute->type;
                $dr->setDetailsAttribute($options);
                $dr->save();
            });

            
        });

        static::deleted(function ($attribute) {

            Schema::table('products', function (Blueprint $table) use ($attribute){
                $name = preg_replace("/[^A-Za-z0-9]/", "", Str::camel($attribute->name));        
                
                $dr = DataRow::where("data_type_id",DataType::where("name","products")->first()->id)->where("field",$name)->first();
                $dr->delete();
                $table->dropColumn($name);
            });
            
            
        });

    }

}
