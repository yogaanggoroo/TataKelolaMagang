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
        Schema::create('applies', function (Blueprint $table) {
            $table->id();
            $table->string('email',)->required();
            $table->string('name',)->required();
            $table->char('gender')->required();
            $table->char('phone')->required();
            $table->text('address')->required();
            $table->string('image')->required();
            $table->string('upload_proposal')->required();
            $table->string('upload_rekomendasi')->required();
            $table->string('upload_cv')->required();
            $table->string('upload_nilai')->required();
            $table->string('upload_portfolio');
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
        Schema::dropIfExists('applies');
    }
};
