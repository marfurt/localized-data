<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTableFk extends Migration {

	public function up()
	{
		Schema::table('countries_localized', function(Blueprint $table) {
			$table->foreign('locale_id', 'fk_countries_localized_locales')->references('id')->on('locales');
		});
	}

	public function down()
	{
		Schema::table('countries_localized', function(Blueprint $table) {
			$table->dropForeign('fk_countries_localized_locales');
		});
	}

}
