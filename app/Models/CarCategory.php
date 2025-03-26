<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarCategory extends Model
{
    public function carModels()
    {
        return $this->hasMany(CarModel::class, 'car_categories_id');
    }
}
