<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable = [
        'modelName',
        'description',
        'description2',
        'description3',
        'car_categories_id',
    ];

    
    public $timestamps = false;

    public function category() {
        return $this->belongsTo(CarCategory::class);
    }
}
