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
        Schema::create('medias', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('filepath', 1024);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('channels', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('channel_name', 150);
            $table->uuid('channel_profile_image_id');
            $table->uuid('channel_cover_image_id');
            $table->string('slug', 200)->unique();
            $table->integer('owner_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('channel_profile_image_id')->references('id')->on('medias');
            $table->foreign('channel_cover_image_id')->references('id')->on('medias');
            $table->foreign('owner_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('channels');
        Schema::dropIfExists('medias');
    }
};
