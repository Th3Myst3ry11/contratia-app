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
            $table->string('firstName',50);
            $table->string('lastName',50);
            $table->string('contact',50);
            $table->string('Experience',50);
            $table->string('Education',50);
            $table->string('profile_email',50);
            $table->string('Birthday',50);
            $table->string('current_address',255);
            $table->string('permanent_address',50);
            $table->string('gender',1);
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
