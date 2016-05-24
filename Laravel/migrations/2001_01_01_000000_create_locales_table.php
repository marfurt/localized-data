<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalesTable extends Migration {

	public function up()
	{
		Schema::create('locales', function(Blueprint $table) {
			$table->string('id', 5)->primary();
			$table->string('language', 2);
			$table->string('country_code', 2)->nullable();
			$table->string('name', 64);
			$table->string('name_en', 64);
		});
	}

	public function down()
	{
		Schema::drop('locales');
	}

}
