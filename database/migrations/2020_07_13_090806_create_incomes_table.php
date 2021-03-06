<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained('income_expenditure_types');
            $table->decimal('amount',10,2);
            $table->decimal('tax_amount',10,2)->nullable();
            $table->foreignId('client_id')->constrained('clients');
            $table->foreignId('agent_id')->constrained('agents');
            $table->foreignId('property_id')->constrained('properties');
            $table->date('date');
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
        Schema::dropIfExists('incomes');
    }
}
