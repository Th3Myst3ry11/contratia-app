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
        Schema::create('skills_job', function (Blueprint $table) {
            $table->increments('id');
            $table->string('skill_name');
            $table->bigInteger('job_fk')->unsigned()->index();
            $table->foreign('job_fk')
                ->references('id')
                ->on('job')
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
        Schema::dropIfExists('skills_job');
    }
};
