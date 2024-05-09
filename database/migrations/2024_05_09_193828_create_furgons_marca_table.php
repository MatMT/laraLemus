<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('log_furgones_marca', function (Blueprint $table) {
            $table->id('id_marca_furg');
            $table->string('descripcion', 30)->unique();
            $table->boolean('status');

            // $table->string('hexcode', 100)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_furgones_marca');
    }
};
