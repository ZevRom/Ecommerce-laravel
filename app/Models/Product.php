<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;

    protected $guarded = ['id','created_at','updated_at']; //CAMPOS PARA DESAHABILITAR

    //RELACIÓN 1:M
    public function sizes(){
        return $this->hasMany(Size::class);
    }


    //RELACIÓN 1:M INVERSA
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }


    //RELACIÓN M:M
    public function colors(){
        return $this->belongsToMany(Color::class);
    }

    //RELACIÓN 1:M POLIMÓRFICA
    public function image(){
        return $this->morphMany(Image::class,'imageable');
    }


}
