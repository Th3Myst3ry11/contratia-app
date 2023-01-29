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
        Schema::create('profile', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('firstname',50);
            $table->string('lastname',50);
            $table->string('phone',50)->nullable();
            $table->string('email',50);
            $table->string('rate',50);
            $table->string('currency',10);
            $table->string('city',50);
            $table->string('country',50);
            $table->integer('recomendations')->nullable();
            $table->text('description')->nullable();
            $table->bigInteger('user_fk')->unsigned()->index()->nullable();
            $table->foreign('user_fk')->references('id')->on('users')->onDelete('cascade');
               
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
        Schema::dropIfExists('profile');
    }
};
