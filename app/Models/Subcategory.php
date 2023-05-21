<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at']; //CAMPOS PARA DESAHABILITAR

    //RELACIÓN 1:M
    public function products(){
        return $this->hasMany(Product::class);
    } 

    //RELACIÓN 1:M inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }

}
