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
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'nombre');
            $table->string('telefono')->nullable();
            $table->timestamp('fecha_registro')->useCurrent();
            $table->timestamp('fecha_modificacion')->nullable();
            $table->boolean('estado')->default(true);
            $table->dropTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['nombre', 'telefono', 'fecha_registro', 'fecha_modificacion', 'estado' ]);
            $table->timestamps();
        });
    }
};
