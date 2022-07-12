<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration //Clase de tipo Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //Actividad principal de la migracion
    {
        Schema::create('users', function (Blueprint $table) { //Tabla creada mediante objetos
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //Si quieres eliminar lo que acabas de crear
    {
        Schema::dropIfExists('users');
    }
};
