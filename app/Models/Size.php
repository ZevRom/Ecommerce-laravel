<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $fillable = ['name','product_id'];

    //RELACIÓN 1:M INVERSA
    public function product(){
        return $this->belongsTo(Product::class);
    }

    //RELACIÓN M:M
    public function colors(){
        return $this->belongsToMany(Color::class);
    }
}
