<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('brandName');
            $table->string('description');
        });

        Schema::create('car_categories', function (Blueprint $table) {
            $table->id();
            $table->string('categoryName');
            $table->string('imageURL');
            $table->string('brochureLink');
            $table->unsignedBigInteger('brand_id'); 
    
             // Foreign Key Constraint
            $table->foreign('brand_id')
                ->references('id')
                ->on('brands')
                ->onDelete('cascade'); 
        });

        Schema::create('car_models', function (Blueprint $table) {
            $table->id();
            $table->string('modelName');
            $table->string('description');
            $table->string('description2')->nullable();
            $table->string('description3')->nullable();
            $table->unsignedBigInteger('car_categories_id'); 

             // Foreign Key Constraint
             $table->foreign('car_categories_id')
                ->references('id')
                ->on('car_categories')
                ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carbrand');
    }
};
