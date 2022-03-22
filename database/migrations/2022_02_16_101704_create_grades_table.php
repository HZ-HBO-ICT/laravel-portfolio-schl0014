<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('quartile');
            $table->string('course_name');
            $table->string('Exam');
            $table->decimal('EC');
            $table->decimal('lowest_passing_grade')->default(5.5);
            $table->decimal('beste_grade')->nullable();
            $table->boolean('completed')->default(false);
            $table->date('passed_at')->nullable();
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses');
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
        Schema::dropIfExists('grades');
    }
}
