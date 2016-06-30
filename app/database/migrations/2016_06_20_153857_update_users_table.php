<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users',function($tabel){
			$tabel->text('alamat');
		});
		/*Menambah kolom atau edit kolom = php artisan migrate*/
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users',function($tabel){
			$tabel->dropColumn('alamat');
		});
		/*jika menghapus kolom menggunakan = php artisan migrate:rollback*/
	}

}
