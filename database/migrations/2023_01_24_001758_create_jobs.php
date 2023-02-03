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
        Schema::create('job', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',30);
            $table->string('email',30);
            $table->string('phone',30)->nullable();
            $table->string('country',30);
            $table->string('file_path')->nullable();
            $table->string('city',30);
            $table->string('offer',30);
            $table->string('description',255);
            $table->json('skill');
            $table->bigInteger('user_fk')
            ->unsigned()
            ->index()
            ->nullable();
            $table->foreign('user_fk')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');     
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
        Schema::dropIfExists('jobs');
    }
};
