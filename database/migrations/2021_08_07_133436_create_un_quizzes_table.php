<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('un_quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('Question1');
            $table->string('Question2');
            $table->string('Question3');
            $table->string('Question4');
            $table->string('Reponse');
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
        Schema::dropIfExists('un_quizzes');
    }
}
