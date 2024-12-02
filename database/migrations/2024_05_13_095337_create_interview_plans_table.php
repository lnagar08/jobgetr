<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interview_plans', function (Blueprint $table) {
            $table->id();
            $table->string('plan_name')->nullable();
            $table->integer('shared_Interviews')->nullable();
            $table->text('description')->nullable(); 
            $table->decimal('price', 10, 2)->nullable(); 
            $table->string('stripe_price_id')->nullable();
            $table->string('stripe_product_id')->nullable();
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
        Schema::dropIfExists('interview_plans');
    }
}
