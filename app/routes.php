<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	/*return View::make('hello');*/
	return View::make('index');
});

Route::get('hello', function()
{
	return 'Hallo world in laravel';
});

Route::get('rojib', function()
{
	/*return View::make('hello');*/
	return 'Haloo rojib';
});
Route::get('laptop/{merk}',function($merk) 
{
	return 'Laptop ini bermerk : '.$merk;
}); /*routing menggunakan parameter*/

Route::get('programmer/{tipe?}',function($tipe = null)
{
	if ($tipe == null) return 'Anda tidak tahu tipe programmer apa anda';
	return 'Anda programmer bertipe : '.$tipe;
}); /*routing menggunakan parameter & jika kosong akan terisi juga*/

Route::get('alamat/{kota?}',function($kota = 'jogja')
{
	return 'Alamat anda di '.$kota;
}); /*routing jika parameter alamat tidak diisi maka otomatis terisi jogja*/

Route::get('motor','MotorController@index'); /*routing ke controller motor method index*/

Route::get('belajar/{mempelajari?}','MotorController@lagibelajar');
/*routing ke controller motor method lagibelajar dengan parameter*/

Route::get('mencoba/{mempelajari}','MotorController@ke_view');
/*routing ke controller motor method lagibelajar dengan parameter*/

Route::get('bladetes','HomeController@index');

Route::get('users',function(){
	/*Schema::create('users',function($tabel){
		$tabel->increments('id');
		$tabel->string('username',50);
		$tabel->string('email',50);
		$tabel->string('password',50);
		$tabel->timestamps();
	});*/
	/*Schema::table('users',function($tabel){
		$tabel->text('alamat');
	});*/
	/*Schema::table('users',function($table){
		$table->dropColumn('alamat');
	});*/
		/*Schema::table('users',function($table){
		$table->renameColumn('motivasi','alamat');
	});*/
	/*Schema::table('users',function($tabel){
		$tabel->text('motivasi');
	});*/
	/*Schema::table('users',function($tabel){
		$tabel->dropColumn(array('alamat','motivasi'));
	});*/
	/*Schema::table('users',function($tabel){
		$tabel->string('alamat')->unique();
	});*/
	/*Schema::table('users',function($tabel){
		$tabel->integer('id_user')->unsigned();
		$tabel->foreign('id_user')->references('id')->on('users');
	});*/
	/*Schema::table('users',function($tabel){
		$tabel->dropForeign(['id_user']);
	});*/
	/*Schema::table('siswa',function($tabel){
		$tabel->char('id_user',5);
	});*/
	/*Schema::table('users',function($tabel){*/
		/*$tabel->char('id_user',5);*/
		/*$tabel->index('id_user');*/
		/*$tabel->foreign('id_user')->references('id_user')->on('siswa');
	});*/
	/*Schema::table('users',function($tabel){
		$tabel->foreign('id_user')->references('id_user')->on('siswa');
	});*/
	/*Schema::table('users',function($tabel){
		$tabel->dropForeign(['id_user']);
	});*/
	/*Schema::drop('users');*/

	/*Schema::create('users',function($tabel){
		$tabel->increments('id');
		$tabel->string('username',50);
		$tabel->string('email',50);
		$tabel->string('password',50);
		$tabel->timestamps();
	});*/
	/*Schema::table('users',function($tabel){
		$tabel->char('id_user',5)->primary();
	});*/
	return 'table tambah foreign key';
});

Route::get('tambahData',function(){
	$author = new Author;

	$author->username = 'zainnur ganteng';
	$author->bio = 'zainnur seorang yang ganteng';
	$author->save();
});

Route::get('lihatAwal',function(){
	$authors = Author::all()->first();

	echo $authors->username.'<br/>';
	echo $authors->bio;
});

Route::get('lihatSemua',function(){
	$authors = Author::all();

	foreach ($authors as $author) {
		echo $author->username.'<br/>';
		echo $author->bio.'<br/><br/>';
	}
});

Route::get('editData',function(){
	$author = Author::find(1);

	$author->username = 'rojib belajar';
	$author->bio = 'Dia sedang mempelajari laravel';

	$author->save();
});

Route::get('deleteData',function(){
	$author = Author::find(2);

	$author->delete();

	return 'Delete dengan id '.$author->id.' berhasil';
});

Route::get('relation',function(){
	$author = Author::find(3);

	$article = new Article;
	$article->judul = 'Pulang ke rumah';
	$article->body = 'Pulang ke rumah paman sambil bernyanyi';
	$article->author_id = $author->id;
	$article->save();

	$article2 = new Article;
	$article2->judul = 'Pergi ke Rumah';
	$article2->body = 'Pergi ke rumah pakde sambil bernyanyi';
	$article2->author_id = $author->id;
	$article2->save();

});

Route::get('lihatAuthor',function(){
	$authors = Author::whereUsername('rojib belajar')->first();

	foreach ($authors->article as $author) {
		echo "Judul : ".$author->judul."<br/>";
		echo "Isi : ".$author->body."<br/><br/>";
	}
});

Route::get('lihatJudul',function(){
	$article = Article::whereJudul('Pergi ke Rumah')->first();

	/*foreach ($articles->author as $article) {*/
		echo "Nama : ".$article->author->username."<br/>";
		echo "Biodata : ".$article->author->bio."<br/><br/>";
	/*}*/
});

Route::get('lihatJudul2',function(){
	$articles = Article::whereJudul('Pulang ke rumah')->first();

	foreach ($articles as $article) {
		echo "Nama : ".$article->author->username."<br/>";
		echo "Biodata : ".$article->author->bio."<br/><br/>";
	}
});

Route::get('lihatSemua2',function(){
	$articles = Article::all();

	foreach ($articles as $article) {
		echo "Author : ".$article->author->username."<br/>";
		echo "Menulis artikel : <br/>";
		echo "Judul : ".$article->judul."<br/>";
		echo "Isi : ".$article->body."<br/><br/>";
	}
});

Route::resource('user','UserController');

Route::get('hapus_user/{id_user}',array('as' => 'delete_user', 'uses' => 'UserController@destroy'));

//Baru 

Route::get('v_dashboard',function(){
	return View::make('v_dashboard');
});

Route::get('author',array('as' => 'author', 'uses' => 'AuthorController@index'));
Route::get('hapus_author/{id}',array('uses'=>'AuthorController@destroy'));

Route::get('article',array('as' => 'article','uses' => 'ArticleController@index'));

Route::resource('author','AuthorController');

Route::resource('article','ArticleController');

Route::get('hapus_article/{id}',array('uses'=>'ArticleController@destroy'));