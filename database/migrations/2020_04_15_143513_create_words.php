<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('words', function (Blueprint $table) {
            $table->increments('id');
            $table->string('word', 200);
            $table->timestamps();
        });

        Schema::create('definitions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('partOfSpeech', 200);
            $table->mediumText('definition');
            $table->unsignedInteger('word_id');
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
        Schema::dropIfExists('words');

        Schema::dropIfExists('definitions');

    }
}
