<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('id of the blog article');
            $table->string('title')->comment('title of the blog');
            $table->text('body')
                ->comment('text/story of the blog where you can give you opinion or experience about something');
            $table->string('link')->nullable()
                ->comment('link to a specifiek site or pdf where you give your show your experience or opinion');
            $table->string('link_name')->nullable()->comment('link name of the document/site');
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
        Schema::dropIfExists('blogs');
    }
}
