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
        Schema::create('log_furgones', function (Blueprint $table) {
            $table->string('id_placa', 15)->primary(); // Custom PK
            $table->string('vin', 20);

            // $table->integer('anio',false,true);
            // $table->float('anio');

            // FK =================================================
            $table->foreignId('id_marca_furg')->nullable()
                ->constrained('log_furgones_marca', 'id_marca_furg')
                ->nullOnDelete();

            $table->foreignId('id_color_furg')->nullable()
                ->constrained('log_furgones_color', 'id_color_furg')
                ->nullOnDelete();

            // =======================

            $table->string('suspensiones', 30);
            $table->string('puertas_cortinas', 25);
            $table->string('propiedas', 50);
            $table->string('refendada', 30);
            $table->string('permiso_salud', 100);
            $table->string('dimensiones', 5);
            $table->double('altura_maxima', 10, 2, false);

            $table->string('tipo_techo', 25);
            $table->string('tipo_rieles', 30);
            $table->string('tipo_tadem', 30);
            $table->string('tipo_rin', 30);
            $table->string('tipo_piso', 30);

            $table->string('durmientes', 30);
            $table->string('perfil_llantas', 30);
            $table->string('cinta_reflectiva', 30);
            $table->string('predes_internas', 30);

            $table->string('granada', 30);
            $table->string('plancha', 30);

            $table->boolean('rotulado');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_furgones');
    }
};
