<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('appointments', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->date('date')->nullable();
        $table->time('time')->nullable();
        $table->string('location');
        $table->string('status')->default('pending');
        $table->string('attorney')->nullable();
        $table->string('client')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('appointments');
}

};
