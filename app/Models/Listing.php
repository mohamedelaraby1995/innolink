<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    //Filter by tags
    public function scopeFilter($query, Array $filters){

        //Find the tag into the data base
        // if you find it show it
        //otherwise return false

        if($filters['tag'] ?? false){
            $query->where('tags','like', '%' .request('tag'). '%' );
        }


    }
}
