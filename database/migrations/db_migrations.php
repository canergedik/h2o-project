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
        Schema::create('artist', function (Blueprint $table) {
            $table->id();
            $table->string('name');
           
        });

        Schema::create('song', function (Blueprint $table) {
            $table->id();
            $table->foreignId('artist_id'); 
            $table->string('name'); 
            $table->string('genre');      
        });



    }

};
