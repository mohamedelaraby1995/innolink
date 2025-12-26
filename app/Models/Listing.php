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
            $this->findTags($query);
        }

        if($filters['search'] ?? false){
            $this->findBySearch($query);
        }




    }


    // Find the tag
    public function findTags($query){
        return $query->where('tags','like', '%' .request('tag'). '%' );
    }


    public function    findBySearch($query){
        return $query->where('title','like', '%' .request('search'). '%' )
        ->orWhere('description','like', '%' .request('search'). '%')
        ->orWhere('tags','like', '%' .request('search'). '%')
        ->orWhere('location','like', '%' .request('search'). '%')
        ->orWhere('company_name','like', '%' .request('search'). '%')
        ->orWhere('email','like', '%' .request('search'). '%');
    }

    //Search feature

}
