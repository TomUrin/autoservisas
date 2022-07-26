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
        Schema::create('selected_services', function (Blueprint $table) {
            $table->id();
            $table->string('workshop', 50);
            $table->string('mechanic', 50);
            $table->string('service', 50);
            $table->string('price', 50);
            $table->string('date', 12);
            $table->string('time', 10);
            $table->string('user', 50);
            $table->integer('status');
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
        Schema::dropIfExists('selected_services');
    }
};
