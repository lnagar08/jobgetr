<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaryCalculatorDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_calculator_data', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullable();
            $table->string('location')->nullable();
            $table->string('publisher_name')->nullable();
            $table->string('publisher_link')->nullable();
            $table->string('salary_period')->nullable();
            $table->string('salary_currency')->nullable();
            $table->integer('min_salary')->nullable();
            $table->integer('median_salary')->nullable();
            $table->integer('max_salary')->nullable();
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
        Schema::dropIfExists('salary_calculator_data');
    }
}
