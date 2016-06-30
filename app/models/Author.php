<?php
 
class Author extends Eloquent 
{
    // table yang akan digunakan
    public $table = 'authors';
    protected $primaryKey = 'id';

    public function article()
	{
		return $this->hasMany('Article'); /*satu author memiliki banyak article*/
	}
}
 
?>