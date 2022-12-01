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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('name');
            $table->string('gender');
            $table->string('division');
            $table->string('phone');
            $table->string('university');
            $table->string('photo');
            $table->string('proposal');
            $table->string('recommendation_letter');
            $table->string('CV');
            $table->string('transcripts');
            $table->string('portfolio');
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
        Schema::dropIfExists('participants');
    }
};
