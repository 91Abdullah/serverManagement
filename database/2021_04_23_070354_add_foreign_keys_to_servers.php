<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToServers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('servers', function (Blueprint $table) {
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');


            $table->unsignedBigInteger('solution_location_id');
            $table->foreign('solution_location_id')->references('id')->on('solution_location');


            $table->unsignedBigInteger('solution_type_id');
            $table->foreign('solution_type_id')->references('id')->on('solution_type');


            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('department');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('servers', function (Blueprint $table) {
            //
        });
    }
}
