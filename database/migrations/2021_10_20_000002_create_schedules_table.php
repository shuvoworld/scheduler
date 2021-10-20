<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('place');
            $table->datetime('time');
            $table->longText('reference')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
