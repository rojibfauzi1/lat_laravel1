<?php 

class Article extends Eloquent {

	public $table = 'articles';
	protected $primaryKey = 'id';

	public function author()
	{
		return $this->belongsTo('Author'); /*article ini hanya dapat dimiliki satu author*/
		//Author dari nama class
	}


}

?>