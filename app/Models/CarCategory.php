<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarCategory extends Model
{
    protected $fillable = [
        'categoryName',
        'brochureLink',
        'imageURL',
        'brand_id',
    ];

    public $timestamps = false;
    public function carModels()
    {
        return $this->hasMany(CarModel::class, 'car_categories_id');
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }
}
