<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillabe=['name','slug','image','icon'];

    // RELACIÓN 1:M
    public function subcategories(){
        return $this->hasMany(SubCategoty::class);
    }

    //RELACIÓN M:M
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    //RELACIÓN 1:M A través de
    public function products(){
        return $this->hasManyThrough(Product::class,Subcategory::class);
    }
}
