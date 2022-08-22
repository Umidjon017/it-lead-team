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
        Schema::create('team_of_experts', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('profession');
            $table->text('description');
            $table->string('image');
            $table->string('link_telegram');
            $table->string('link_linkedin');
            $table->string('link_github');
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
        Schema::dropIfExists('team_of_experts');
    }
};
