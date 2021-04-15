<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaravelBlockerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('laravel_blocker', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('typeId')->unsigned()->index('laravel_blocker_typeid_index');
			$table->string('value', 191)->unique();
			$table->text('note')->nullable();
			$table->bigInteger('userId')->unsigned()->nullable()->index('laravel_blocker_userid_index');
			$table->timestamps(10);
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
		Schema::drop('laravel_blocker');
	}

}
