 @include('index')
    <div class="container">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
      
  <div class="panel-heading"><b>Daftar Artile</b></div>
  <div class="panel-body">
      <a href="<?php echo url('/article/create') ?>" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
       <table class="table table-striped">
        <thead>
         <tr >
         <th>No</th>
         <th>Judul</th>
         <th>Isi</th>
         <th>Author</th>
         <th>Aksi</th>
         </tr>
        </thead>
        <tbody>
        <?php $no=1; ?>
         @foreach($data_article as $data)
        <tr>

         <td>{{ $no; }}</td>
         <td>{{ $data->judul }}</td>
         <td width="200">{{ substr($data->body,0,50) }}</td>
         <td>{{ $data->author->username }}</td>
         <td>
           <a href="<?php echo url('/article/'.$data->id.'/edit') ?>">Edit</a> ||
           <a href="<?php echo url('hapus_article/'.$data->id) ?>">Hapus</a>
         </td>

       </tr>
       <?php $no++; ?>
         @endforeach
        </tbody>
       
       </table>
       
        </div>
        {{ $data_article->links() }}
    </div>    <!-- /panel -->
    </div> <!-- /container -->
