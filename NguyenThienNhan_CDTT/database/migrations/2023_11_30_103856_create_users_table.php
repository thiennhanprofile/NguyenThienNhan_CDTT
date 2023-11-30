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
        Schema::create('db_product', function (Blueprint $table) {
            $table->id(); //id
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('brand_id');
            $table->string('name', 1000);
            $table->string('slug', 1000);
            $table->text('detail');
            $table->string('description',255);
            $table->string('image',1000);
            $table->double('price');
            $table->timestamps(); //created_at, updated_at
            $table->unsignedInteger('created_by')->default(1);
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedTinyInteger('status')->default(2);
            });
            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('db_product');
    }
};
