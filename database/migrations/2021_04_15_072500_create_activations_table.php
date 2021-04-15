<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activations', function(Blueprint $table)
		{
			$table->bigInteger('id')->unsigned()->primary();
			$table->bigInteger('user_id')->unsigned()->index();
			$table->string('token', 191);
			$table->string('ip_address', 45);
			$table->timestamps(10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activations');
	}

}
