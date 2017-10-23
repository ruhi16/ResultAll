<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClssExamExtypeSubjectFmpm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clss_exam_extype_subject_fmpm', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clss_id');
            $table->integer('exam_id');
            $table->integer('extype_id');
            $table->integer('subject_id');
            $table->integer('fm');
            $table->integer('pm');
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
        Schema::dropIfExists('clss_exam_extype_subject_fmpm');
    }
}
