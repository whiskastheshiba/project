<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccommodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accommodations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('accommodation_name',550);
            $table->string('accommodation_city',50);
            $table->string('accommodation_address',150);
            $table->decimal('accommodation_price');
            $table->string('accommodation_description',2000);
            $table->string('accommodation_tags',2000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accommodation');
    }
}
