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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doner_id');
            $table->foreign('doner_id')->on('users')->references('id')->cascadeOnDelete();
            $table->foreignId('seeker_id');
            $table->foreign('seeker_id')->on('users')->references('id')->cascadeOnDelete();
            $table->dateTime('scheduled_date');
            $table->dateTime('donation_date');
            $table->boolean('is_done');
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
        Schema::dropIfExists('transactions');
    }
};
