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
        Schema::create('talents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('city_id');
            $table->date('birth_date');
            $table->char('gender', 1);
            $table->string('cv');
            $table->string('portofolio');
            $table->string('certificate');
            $table->string('status');
            $table->string('expectation_work_type');
            $table->dateTime('available_work_hours_min');
            $table->dateTime('available_work_hours_max');
            $table->string('skills');
            $table->string('preferences');
            $table->string('link_ig');
            $table->string('iink_fb');
            $table->string('link_linkedin');
            $table->string('iink_twitter');
            $table->string('profile_photo');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talents');
    }
};
