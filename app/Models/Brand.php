<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['brandName','description'];
    public $timestamps = false;
    public function categories() {
        return $this->hasMany(CarCategory::class, 'brand_id');
    }
}
