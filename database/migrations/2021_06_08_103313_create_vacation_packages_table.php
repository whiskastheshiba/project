<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacationPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacation_packages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('package_name',550);
            $table->string('package_city',50);
            $table->string('package_address',150);
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('package_price');
            $table->string('package_description',2000);
            $table->string('package_tags',2000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacation_packages');
    }
}
