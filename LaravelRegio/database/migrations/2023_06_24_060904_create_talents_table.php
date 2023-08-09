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
            $table->unsignedBigInteger('province_id');
            $table->date('birth_date');
            $table->char('gender', 1);
            $table->string('cv')->nullable();;
            $table->string('portofolio')->nullable();;
            $table->string('certificate')->nullable();;
            $table->string('status')->nullable();;
            $table->string('expectation_work_type')->nullable();;
            $table->dateTime('available_work_hours_min')->nullable();;
            $table->dateTime('available_work_hours_max')->nullable();;
            $table->string('skills')->nullable();;
            $table->string('preferences')->nullable();;
            $table->string('link_ig')->nullable();;
            $table->string('link_fb')->nullable();;
            $table->string('link_linkedin')->nullable();;
            $table->string('link_twitter')->nullable();;
            $table->string('profile_photo')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
