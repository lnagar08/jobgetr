<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContantManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contant_management', function (Blueprint $table) {
            $table->id();
            $table->text('personal_details')->nullable();
            $table->text('contact_information')->nullable();
            $table->text('professional_summary')->nullable();
            $table->text('employment_history')->nullable();
            $table->text('education')->nullable();
            $table->text('skills')->nullable();
            $table->text('internships')->nullable();
            $table->text('certificate')->nullable();
            $table->text('courses')->nullable();
            $table->text('references')->nullable();
            $table->text('links')->nullable();
            $table->text('languages')->nullable();
            $table->text('hobbies')->nullable();
            $table->text('custom_section')->nullable();
            $table->text('additional_section')->nullable();
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
        Schema::dropIfExists('contant_management');
    }
}
