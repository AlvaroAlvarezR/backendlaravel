<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThirdPartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('third_parties', function (Blueprint $table) {
            $table->id();
            $table->string('name1');
            $table->string('name2');
            $table->string('lastname1');
            $table->string('lastname2');
            $table->unsignedBigInteger('id_type_id');
            $table->unsignedBigInteger('third_type_id');
            $table->unsignedBigInteger('municipality_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('taxpayer_type_id');
            $table->foreign('id_type_id')->references('id')->on('list_elements');
            $table->foreign('third_type_id')->references('id')->on('list_elements');
            $table->foreign('municipality_id')->references('id')->on('list_elements');
            $table->foreign('department_id')->references('id')->on('list_elements');
            $table->foreign('taxpayer_type_id')->references('id')->on('list_elements');
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
        Schema::dropIfExists('third_parties');
    }
}
