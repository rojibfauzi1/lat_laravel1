<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*Schema::create('users',function($tabel){
			$tabel->char('id_user',5)->primary();
			$tabel->string('username',50);
			$tabel->string('email',50);
			$tabel->string('password',50);
			$tabel->timestamps();
		});*/
		Schema::table('users',function($tabel){
			$tabel->text('alamat');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		/*Schema::drop('users');*/
		Schema::table('users',function($tabel){
			$tabel->dropColumn('');
		});
	}

}
