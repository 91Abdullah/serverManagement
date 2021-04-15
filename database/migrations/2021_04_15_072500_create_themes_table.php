<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('themes', function(Blueprint $table)
		{
			$table->bigInteger('id')->unsigned();
			$table->string('name', 191);
			$table->string('link', 191);
			$table->string('notes', 191)->nullable();
			$table->boolean('status')->default(1);
			$table->string('taggable_type', 191);
			$table->bigInteger('taggable_id')->unsigned();
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
		Schema::drop('themes');
	}

}
