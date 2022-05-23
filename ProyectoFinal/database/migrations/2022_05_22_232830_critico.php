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
        Schema::create('criticos', function (Blueprint $table) {
            $table->id();
            $table->string('firstName', 60);
            $table->string('lastName', 60);
            $table->integer('totalCriticas');
            $table->text('descripcion');
            $table->string('foto')->nullable();
            $table->integer('userID')->nullable();
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
        //
    }
};
