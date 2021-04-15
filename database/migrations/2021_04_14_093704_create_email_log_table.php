<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('email_log', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->dateTime('date');
			$table->string('from', 191)->nullable();
			$table->string('to', 191)->nullable();
			$table->string('cc', 191)->nullable();
			$table->string('bcc', 191)->nullable();
			$table->string('subject', 191);
			$table->text('body');
			$table->text('headers')->nullable();
			$table->text('attachments')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('email_log');
	}

}
