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
        Schema::create('progress_photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('talent_id');
            $table->unsignedBigInteger('project_progress_id');
            $table->string('photo_url');
            $table->timestamps();

            $table->foreign('talent_id')
                ->references('id')
                ->on('talents')
                ->onDelete('cascade');

            $table->foreign('project_progress_id')
                ->references('id')
                ->on('project_progresses')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progress_photos');
    }
};
