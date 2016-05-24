<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration {

	public function up()
	{
		Schema::create('countries', function(Blueprint $table) {
			$table->string('country_code', 2)->default('')->primary();
		});

		Schema::create('countries_localized', function(Blueprint $table) {
			$table->increments('id');
			$table->string('country_code', 2)->default('');
			$table->string('locale_id', 5)->default('');
			$table->string('name', 64)->default('');
			$table->unique([ 'country_code','locale_id' ], 'u_country_code_locale_id');
		});
	}

	public function down()
	{
		Schema::drop('countries_localized');
		Schema::drop('countries');
	}

}
