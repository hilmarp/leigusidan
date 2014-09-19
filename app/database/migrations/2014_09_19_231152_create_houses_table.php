<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('houses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('zipcode_id')->unsigned();
			$table->string('address');
			$table->string('type');
			$table->integer('squaremeters');
			$table->integer('rooms');
			$table->decimal('price_month', 9, 0);
			$table->decimal('insurance_price', 9, 0)->nullable();
			$table->date('date_available');
			$table->boolean('pets');
			$table->boolean('electricity');
			$table->boolean('heat');
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
		Schema::drop('houses');
	}

}
