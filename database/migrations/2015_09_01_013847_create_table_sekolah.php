<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSekolah extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sekolah', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_sekolah');
			$table->string('alamat');
			$table->integer('jumlah_kelas');
			$table->integer('jumlah_siswa');
			$table->string('akreditasi');
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
		Schema::drop('sekolah');
	}

}
