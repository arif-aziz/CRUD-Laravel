<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMArtikelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('m_artikel', function(Blueprint $table) {
            $table->increments('id_artikel');
            $table->integer('id_user');
            $table->string('judul', 255);
            $table->date('tanggal');
            $table->text('isi')->nullable();
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
		Schema::dropIfExists('m_artikel');
	}

}
