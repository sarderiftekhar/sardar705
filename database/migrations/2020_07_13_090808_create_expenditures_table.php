<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpendituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenditures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained('income_expenditure_types');
            $table->mediumText('notes');
            $table->date('date');
            $table->decimal('amount',10,2);
            $table->foreignId('client_id')->constrained('clients');
            $table->foreignId('agent_id')->constrained('agents');
            $table->foreignId('property_id')->constrained('properties');
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
        Schema::dropIfExists('expenditures');
    }
}
