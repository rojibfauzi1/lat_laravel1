<?php 

class Author1 extends Eloquent {

	public function article()
	{
		return $this->hasMany('Article'); /*satu author memiliki banyak article*/
	}

}
?>