<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserResumeTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_resume_templates', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('template_id');
            $table->string('color_code')->nullable();
            $table->string('font_family')->nullable();
            $table->string('layout')->nullable();
            $table->string('line_height')->nullable();
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
        Schema::dropIfExists('user_resume_templates');
    }
}
