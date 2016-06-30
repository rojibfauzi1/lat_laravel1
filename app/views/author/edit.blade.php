@include('index')
<div class="container">
<div class="panel panel-default">
	<div class="panel panel-heading">Form Author</div>
	<div class="panel panel-body">
		{{ Form::open(array('action'=>array('AuthorController@update',$data_author->id),'method'=>'put')) }}
		<div class="form-group">
		  <input readonly="" type="hidden" class="form-control" name="op" value="" required/>
		</div>

		  <div class="form-group">
		    <label>Username</label>
		    {{ Form::input('text','username',$data_author->username,array('class'=>'form-control','placeholder'=>'username')) }}
		  </div>

		  <div class="form-group">
		    <label>Bio</label>
		  	{{ Form::textarea('bio',$data_author->bio,array('class'=>'form-control','placeholder'=>'Isikan bio','rows'=>4,'cols'=>40)) }}
		  </div>

		  <button type="submit" class="btn btn-warning">Simpan</button>
		{{ Form::close() }}
	</div>
</div>
</div>
