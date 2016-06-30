@include('index')
<div class="container">
<div class="panel panel-default">
	<div class="panel panel-heading">Form Author</div>
	<div class="panel panel-body">
		{{ Form::open(array('action'=>'ArticleController@store')) }}
		<div class="form-group">
		  <input readonly="" type="hidden" class="form-control" name="op" value="" required/>
		</div>

		  <div class="form-group">
		    <label>Judul</label>
		    {{ Form::input('text','judul','',array('class'=>'form-control','placeholder'=>'Isikan judul')) }}
		  </div>

		  <div class="form-group">
		    <label>Isi</label>
		  	{{ Form::textarea('isi','',array('class'=>'form-control','placeholder'=>'isi','rows'=>4,'cols'=>40)) }}
		  </div>

		  <div class="form-group">
		  	<label>Author</label>
		  	{{ Form::select('author',
		  		(['0' => 'Pilih Author'] + $tambah_author),
		  		$id_author,
		  		['class'=>'form-control']) }}

		  </div>

		  <button type="submit" class="btn btn-warning">Simpan</button>
		{{ Form::close() }}
	</div>
</div>
</div>
