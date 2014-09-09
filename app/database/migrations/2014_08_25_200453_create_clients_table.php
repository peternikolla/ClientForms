<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function($table)
		{
			// auto increment id (primary key)
			$table->increments('id');
			
			$table->string('first_name');
			$table->string('last_name');
			$table->string('company_name');
			$table->string('email');
			$table->string('address1');
			$table->string('address2');
			$table->string('city');
			$table->integer('state_id')->unsigned();
			$table->foreign('state_id')->references('id')->on('states');
			$table->string('zip');
			$table->string('phone1');
			$table->string('phone2');
			$table->boolean('active')->default(true);
			
			//created_at, updated_at DATETIME
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clients');
	}

}
