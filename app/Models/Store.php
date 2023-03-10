<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function products(){
        return $this->hasMany('App\Models\Product');
    }

    public function quotations(){
        return $this->belongsToMany(Quotation::class);
    }
}
