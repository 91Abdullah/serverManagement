<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServersTable extends Migration
{
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {

		$table->index('id');
		$table->string('Zone')->nullable()->default('NULL');
		$table->string('Customer_Name')->nullable()->default('NULL');
		$table->string('Password')->nullable()->default('NULL');
		$table->string('Solution_Distro')->nullable()->default('NULL');
		$table->string('Hardware')->nullable()->default('NULL');
		$table->integer('Service_Contract',11)->nullable()->default('NULL');
		$table->string('Comment')->nullable()->default('NULL');
		$table->string('ISDAllowed')->nullable()->default('NULL');
		$table->string('IP')->nullable()->default('NULL');
		$table->integer('Winbox',11)->nullable()->default('NULL');
		$table->string('SecondaryIP')->nullable()->default('NULL');
		$table->string('FailoverIP')->nullable()->default('NULL');
		$table->string('Mobile_Number')->nullable()->default('NULL');
		$table->integer('Queue_stats',11)->nullable()->default('NULL');
		$table->string('Customreport')->nullable()->default('NULL');
		$table->integer('Qpanel',11)->nullable()->default('NULL');
		$table->integer('SSHPort',11)->nullable()->default('NULL');
		$table->integer('HTTP_Port',11)->nullable()->default('NULL');
		$table->integer('WebminPort',11)->nullable()->default('NULL');
		$table->timestamp('created_at')->nullable()->default('NULL');
		$table->datetime('updated_at')->nullable()->default('NULL');
		
		$table->timestamps();
		$table->softDeletes();

        });
    }

    public function down()
    {
        Schema::dropIfExists('servers');
    }
}