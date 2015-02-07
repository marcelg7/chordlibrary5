<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('songs', function($table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('created_by');
			$table->integer('modified_by');
			$table->integer('artist_id');
			$table->string('title', 127);
			$table->text('chords');
			$table->integer('rating');
			$table->text('info');
			$table->text('tags');


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('songs');
	}

}
