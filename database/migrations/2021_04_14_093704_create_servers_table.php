<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servers', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('city_id')->unsigned();
			$table->string('Customer_Name')->default('');
			$table->string('Server_Password')->nullable();
			$table->bigInteger('solution_location_id')->unsigned();
			$table->bigInteger('solution_type_id')->unsigned();
			$table->string('Hardware')->nullable();
			$table->enum('Service_Contract', array('Yes','No'))->nullable();
			$table->string('Comment')->nullable();
			$table->enum('ISD_Allowed', array('Yes','No'))->nullable();
			$table->string('Failover_IP')->nullable();
			$table->string('Winbox')->nullable();
			$table->string('Secondary_IP')->nullable();
			$table->enum('Queue_Stats', array('Yes','No'))->nullable();
			$table->enum('Customer_Report', array('Yes','No'))->nullable();
			$table->enum('Q_Panel', array('Yes','No'))->nullable();
			$table->string('SSH_PORT')->nullable();
			$table->string('HTTP_PORT')->nullable();
			$table->string('Webmin_PORT')->nullable();
			$table->timestamps(6);
			$table->softDeletes();
			$table->string('IP')->nullable();
			$table->string('Solution_Distro')->nullable();
			$table->bigInteger('department_id')->unsigned();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servers');
	}

}
