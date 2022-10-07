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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('type_document');
            $table->string('document')->unique();

            $table->tinyInteger('inactive');
            $table->string('first_name', 30);
            $table->string('second_name', 30)->nullable();
            $table->string('first_last_name', 30);
            $table->string('second_last_name', 30)->nullable();
            $table->date('date_of_birth');
            $table->string('address', 40);
            $table->string('email')->unique();
            $table->bigInteger('phone_number');

            $table->bigInteger('specialty')->unsigned();

            $table->string('password', 20);

            $table->bigInteger('question_seg')->unsigned();

            $table->string('answ_seg', 100);
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
            
            $table->foreign('type_document')->references('tdd')->on('type_document');
            $table->foreign('specialty')->references('id')->on('specialty');
            $table->foreign('question_seg')->references('id')->on('question_security');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
