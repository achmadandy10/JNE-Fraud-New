<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegulationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regulation', function (Blueprint $table) {
            $table->string('id')->unique();

            $table->string('name');
            $table->string('type');
            $table->string('entity');
            $table->string('number');
            $table->string('year');
            $table->string('title');
            $table->date('set_date');
            $table->date('promulgated_date');
            $table->date('valid_date');
            $table->string('source');
            $table->string('file');

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
        Schema::dropIfExists('regulation');
    }
}
