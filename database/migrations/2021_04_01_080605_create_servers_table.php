<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id')->foreignId('city_id')->references('id')->on('cities');
            // $table->foreignId('city_id')->references('id')->on('cities');
            $table->string('Customer_Name')->default('');
            $table->string('Server_Password')->nullable();
            $table->unsignedBigInteger('solution_location_id')->foreignId('solution_location_id')->references('id')->on('solution_location');
            // $table->foreignId('solution_location_id')->references('id')->on('solution_location');
            $table->unsignedBigInteger('solution_type_id')->foreignId('solution_type_id')->references('id')->on('solution_type');
            // $table->foreignId('solution_type_id')->references('id')->on('solution_type');
            $table->string('Hardware')->nullable();
            $table->enum('Service Contract', array('Yes', 'No'))->nullable();
            $table->string('Comment')->nullable();
            $table->enum('ISD_Allowed', array('Yes', 'No'))->nullable();
            $table->string('Failover_IP')->nullable();
            $table->string('Winbox')->nullable();
            $table->string('Secondary_IP')->nullable();
            $table->enum('Queue_Stats', array('Yes', 'No'))->nullable();
            $table->enum('Customer_Report', array('Yes', 'No'))->nullable();
            $table->enum('Q_Panel', array('Yes', 'No'))->nullable();
            $table->string('SSH_PORT')->nullable();
            $table->string('HTTP_PORT')->nullable();
            $table->string('Webmin_PORT')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servers');
    }
}
