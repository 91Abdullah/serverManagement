<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaravelLoggerActivityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('laravel_logger_activity', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('description');
			$table->string('userType', 191);
			$table->integer('userId')->nullable();
			$table->text('route')->nullable();
			$table->string('ipAddress', 45)->nullable();
			$table->text('userAgent')->nullable();
			$table->string('locale', 191)->nullable();
			$table->text('referer')->nullable();
			$table->string('methodType', 191)->nullable();
			$table->timestamps(6);
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
		Schema::drop('laravel_logger_activity');
	}

}
