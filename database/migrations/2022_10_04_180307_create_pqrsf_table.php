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
        Schema::create('pqrsf', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('type_pqrsf')->unsigned();

            $table->string('type_document');
            $table->string('document')->unique();

            $table->string('first_name', 30);
            $table->string('second_name', 30)->nullable();
            $table->string('first_last_name', 30);
            $table->string('second_last_name', 30)->nullable();
            $table->bigInteger('phone_number');
            $table->string('email')->unique();
            $table->date('date_of_birth');

            $table->string('reason', 50);
            $table->string('detail', 1000);
            $table->string('supports', 100);
            $table->tinyInteger('answered');

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
        Schema::dropIfExists('pqrsf');
    }
};
