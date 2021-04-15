<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->bigInteger('user_id')->unsigned()->index();
			$table->bigInteger('theme_id')->unsigned()->default(1)->index('profiles_theme_id_foreign');
			$table->string('location', 191)->nullable();
			$table->text('bio')->nullable();
			$table->string('twitter_username', 191)->nullable();
			$table->string('github_username', 191)->nullable();
			$table->string('avatar', 191)->nullable();
			$table->boolean('avatar_status')->default(0);
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
		Schema::drop('profiles');
	}

}
