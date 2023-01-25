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
            $table->string('email');
            $table->string('phone');
            $table->string('country');
            $table->string('city');   
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
