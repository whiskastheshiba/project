<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
 {
        Schema::create('person', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->string('first_name',50);
        $table->string('middle_name',50);
        $table->string('last_name',50);
        $table->string('telephone',15);
 });
 
   }
 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person');
    }
}
