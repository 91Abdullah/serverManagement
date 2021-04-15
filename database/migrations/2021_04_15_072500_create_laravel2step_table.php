<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaravel2stepTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('laravel2step', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->bigInteger('userId')->unsigned()->index('laravel2step_userid_index');
			$table->string('authCode', 191)->nullable();
			$table->integer('authCount');
			$table->boolean('authStatus')->default(0);
			$table->dateTime('authDate')->nullable();
			$table->dateTime('requestDate')->nullable();
			$table->timestamps(6);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('laravel2step');
	}

}
