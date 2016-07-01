@include('index')
<div class="container">
<div class="panel panel-default">
	<div class="panel panel-heading">Form Article</div>
	<div class="panel panel-body">
		{{ Form::open(array('action'=>array('ArticleController@update',$data_article->id),'method'=>'put')) }}
		<div class="form-group">
		  <input readonly="" type="hidden" class="form-control" name="op" value="" required/>
		</div>

		  <div class="form-group">
		    <label>Judul</label>
		    {{ Form::input('text','judul',$data_article->judul,array('class'=>'form-control','placeholder'=>'Isikan judul')) }}
		  </div>

		  <div class="form-group">
		    <label>Isi</label>
		  	{{ Form::textarea('isi',$data_article->body,array('class'=>'form-control','placeholder'=>'isi','rows'=>4,'cols'=>40)) }}
		  </div>

		  <div class="form-group">
		  	<label>Author</label>
		  	
		  	{{ Form::select('author_id',$authors,$data_article->author_id,['class'=>'form-control']) }}


		  </div>

		  <button type="submit" class="btn btn-warning">Simpan</button>
		{{ Form::close() }}
	</div>
</div>
</div>
