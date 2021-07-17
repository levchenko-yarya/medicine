<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacologicalAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacological_agents', function (Blueprint $table) {
            $table->Increments('id')->index();
            $table->string('productName');
            $table->integer('active_substance_id')->nullable()->unsigned();
            $table->foreign('active_substance_id', 'pharmacological_agents_active_substances_id_active_substance_id')
                ->references('id')
                ->on('active_substances')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('manufacturer_id')->nullable()->unsigned();
            $table->foreign('manufacturer_id', 'pharmacological_agents_manufacturers_id_manufacturer_id')
                ->references('id')
                ->on('manufacturers')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('price');
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
        Schema::dropIfExists('pharmacological_agents');
    }
}
