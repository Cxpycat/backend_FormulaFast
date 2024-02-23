<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaceResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('grand_prix_id',)->constrained('grand_prixes');
            $table->foreignId('pilot_id',)->constrained('pilots');
            $table->foreignId('team_id',)->constrained('teams');
            $table->integer('position')->nullable();
            $table->tinyInteger('type_race')->default(1);
            $table->boolean('isFastestLap')->default(false);
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
        Schema::dropIfExists('race_results');
    }
}
