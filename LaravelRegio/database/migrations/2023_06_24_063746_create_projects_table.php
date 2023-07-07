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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('province_id');
            $table->string('project_name');
            $table->string('required_job_position');
            $table->string('talent_requirement');
            $table->string('project_description');
            $table->string('project_location');
            $table->dateTime('project_start_date');
            $table->dateTime('project_end_date');
            $table->string('project_photos');
            $table->dateTime('deadline');
            $table->double('salary_min');
            $table->double('salary_max');
            $table->string('status');
            $table->integer('talent_needed_min');
            $table->integer('talent_needed_max');
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
