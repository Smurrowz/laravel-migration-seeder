<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company_name',50);
            $table->string('departure_station',70);
            $table->string('arrival_station',70);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code',10);
            $table->unsignedTinyInteger('wagons')->nullable(); 
            $table->boolean('in_time')->unsigned()->default(1);
            $table->boolean('canceled')->unsigned()->default(0);
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
        Schema::dropIfExists('trains');
    }
}
