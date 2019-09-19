<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lot', function (Blueprint $table) {
            $table->bigIncrements('numL');
    $table->date('date_fab');
    $table->date('date_per');
    $table->string('prix');
    $table->string('qt_achete');
    $table->string('qt_stock');
    $table->unsignedBigInteger('achat_id');
    $table->foreign('achat_id')->references('numA')->on('achat');
    $table->unsignedBigInteger('med_id');
    $table->foreign('med_id')->references('idM')->on('medicament');
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
        Schema::dropIfExists('lot');
    }
}
