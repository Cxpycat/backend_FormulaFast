<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrandPrixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grand_prixes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150);
            $table->foreignId('country_id',)->constrained('countries');
            $table->foreignId('track_id',)->constrained('tracks');
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
        Schema::dropIfExists('grand_prixes');
    }
}
