<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vente', function (Blueprint $table) {
                $table->bigIncrements('idV');
        $table->date('date');
        $table->string('qt');
        $table->unsignedBigInteger('lot_id');
        $table->foreign('lot_id')->references('numL')->on('lot');
        $table->unsignedBigInteger('pharmacien_id');
        $table->foreign('pharmacien_id')->references('id')->on('users');
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
        Schema::dropIfExists('vente');
    }
}
