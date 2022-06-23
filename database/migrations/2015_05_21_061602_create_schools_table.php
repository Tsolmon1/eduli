<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schools', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('country_id')->unsigned()->index();
            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->onDelete('restrict')
                ->onUpdate('cascade');
			$table->string('thumbnail');
            $table->string('banner');
			$table->string('name');
			$table->integer('rank');
            $table->text('description');
            $table->string('media');
            $table->string('file');
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
		Schema::drop('schools');
	}

}
