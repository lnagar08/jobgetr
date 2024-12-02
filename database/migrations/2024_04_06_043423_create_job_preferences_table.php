<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('job_preferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('job_titles');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('race_ethnicity');
            $table->string('salary_range')->nullable();
            $table->string('hourly_rate')->nullable();
            $table->enum('job_level', ['entry', 'intermediate', 'advanced', 'senior']);
            $table->enum('status', ['true', 'false']);
            $table->string('legal_authorization');
            $table->string('visa_sponsorship');
            $table->string('languages')->nullable();
            $table->enum('protected_veterans');
            $table->enum('disability', ['yes', 'no', 'not_answered']);
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
        Schema::dropIfExists('job_preferences');
    }
}
