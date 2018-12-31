<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMmsLogTabel extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('mms-log', function (Blueprint $table) {
            $table->increments('id');

            $table->string('sid');
            $table->string('from');
            $table->string('to');
            $table->text('body');
            $table->integer('numMedia');
            $table->string('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('mms-log');
    }

}
