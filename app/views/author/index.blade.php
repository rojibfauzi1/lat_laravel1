 @include('index')
    <div class="container">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
      
  <div class="panel-heading"><b>Daftar Author</b></div><br/>
  @if (Session::has('message'))
      <div class="alert alert-success" role="alert">
          <p>{{ Session::get('message') }}</p>
      </div>
  @endif
  <div class="panel-body">
      <a href="<?php echo url('/author/create') ?>" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
       <table class="table table-striped" >
        <thead>
         <tr >
         <th>No</th>
         <th>Username</th>
         <th>Bio</th>
         <th>Aksi</th>
         </tr>
        </thead>
        <tbody>
        <?php $no=1; ?>
         @foreach($data_author as $data)
        <tr>

         <td>{{ $no; }}</td>
         <td>{{ $data->username }}</td>
         <td width="200" >{{ substr($data->bio,0,50) }}</td>
         <td>
           <a href="<?php echo url('/author/'.$data->id.'/edit') ?>">Edit</a> ||
           <a href="<?php echo url('hapus_author/'.$data->id) ?>">Hapus</a>
         </td>

       </tr>
       <?php $no++; ?>
         @endforeach
        </tbody>
       
       </table>
        </div>
        {{ $data_author->links() }}
    </div>    <!-- /panel -->
    </div> <!-- /container -->
