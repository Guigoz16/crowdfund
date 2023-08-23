<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('causes', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('cause_name');
            $table->longText('cause_description');
            $table->string('cause_completionDate');
            $table->string('cause_goal');
            $table->string('cause_image');
            $table->string('cause_status');
            $table->string('cause_address');
            $table->string('total_amount')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('causes', function (Blueprint $table){
            $table->dropSoftDeletes();
        });
    }
};
