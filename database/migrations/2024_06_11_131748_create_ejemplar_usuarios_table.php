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
        Schema::create('ejemplar_usuarios', function (Blueprint $table) {
            $table->id();

         //lave foranea de usuario
         $table->unsignedBigInteger('usuario_id')->nullable();
         $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
          //lave foranea de ejemplar
         $table->unsignedBigInteger('ejemplar_id')->nullable();
         $table->foreign('ejemplar_id')->references('id')->on('ejemplars')->onDelete('cascade');
             

         $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejemplar_usuarios');
    }
};
