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
        Schema::create('db_banner', function (Blueprint $table) {
            $table->id(); //id
            $table->string('name', 255);
            $table->string('image', 255);
            $table->string('link', 1000);
            $table->string('position', 255);
            $table->string('description', 1000);
            $table->unsignedInteger('created_by')->default(1);
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamps(); 
            $table->unsignedTinyInteger('status')->default(2);
            });
            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('db_banner');
    }
};
