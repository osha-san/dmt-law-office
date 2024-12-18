<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('billed_to');
            $table->string('service');
            $table->date('due_date');
            $table->string('status')->default('Not Paid');
            $table->decimal('amount', 10, 2);
            $table->timestamps();
        });
    }

};
