<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qoute', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('type_qoute')->unsigned();

            $table->date('date');
            $table->date('time');
            $table->tinyInteger('inactive');
            $table->string('office');

            $table->string('td_doctor');
            $table->string('document_doctor');
            
            $table->string('td_patient');
            $table->string('document_patient');

            $table->timestamps();

            $table->foreign('type_qoute')->references('id')->on('type_qoute');

            $table->foreign('td_doctor')->references('type_document')->on('users');
            $table->foreign('document_doctor')->references('document')->on('users');

            $table->foreign('td_patient')->references('type_document')->on('users');
            $table->foreign('document_patient')->references('document')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qoute');
    }
};
