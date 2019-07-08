<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMenuPedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_pedido', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedTinyInteger('usuario_id');
            $table->foreign('usuario_id','fk_menupedido_usuario' )->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('menu_id');
            $table->foreign('menu_id','fk_menupedido_libro' )->references('id')->on('libro')->onDelete('restrict')->onUpdate('restrict');
            $table->date('fecha_prestamo');
            $table->string('prestamo_m', 100);
            $table->boolean('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_pedido');
    }
}
