<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarView extends Model
{
    protected $fillable = ['car_model_id', 'name', 'email', 'date', 'time'];

    public function carModel()
    {
        return $this->belongsTo(CarModel::class);
    }
}
