<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClssExamExtypeStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clss_exam_extype_status', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clss_id');
            $table->integer('exam_id');
            $table->integer('extype_id');
            $table->boolean('active');
            $table->string('status');
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
        Schema::dropIfExists('clss_exam_extype_status');
    }
}
