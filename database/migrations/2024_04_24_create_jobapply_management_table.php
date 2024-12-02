<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobapplyManagementTable extends Migration
{
    public function up()
    {
        Schema::create('jobapply_management', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('job_title')->nullable();
            $table->string('company_name')->nullable();
            $table->date('date')->nullable();
            $table->text('remark')->nullable();
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jobapply_management');
    }
}
