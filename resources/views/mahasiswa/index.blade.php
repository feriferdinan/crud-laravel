@extends('layout.main')

@section('title','Mahasiswa')

@section('container')
		<div class="container">
			<div class="row">
				<div class="col-10">
    				<h1 class="mt-3">Daftar Mahasiswa</h1>
							@if (\Session::has('success'))
					      <div class="alert alert-success">
					        <p>{{ \Session::get('success') }}</p>
					      </div><br />
					     @endif
					<a href="" class="btn btn-success mt-2 mb-2" data-toggle="modal" data-target="#exampleModal">Tambah Data Mahasiswa</a>

    				<table class="table">
    					<thead class="thead-dark">
    						<tr>
	    						<th scope="col">#</th>
	    						<th scope="col">Nama</th>
	    						<th scope="col">NRP</th>
	    						<th scope="col">Email</th>
	    						<th scope="col">Jurusan</th>
	    						<th scope="col">Aksi</th>
    						</tr>
    					</thead>
    					<tbody>
    						@foreach( $mahasiswa as $mhs )
    						<tr>
    							<th scope="row">{{ $loop->iteration }}</th>
    							<th >{{$mhs->nama}}</th>
    							<th >{{$mhs->nrp}}</th>
    							<th >{{$mhs->email}}</th>
    							<th >{{$mhs->jurusan}}</th>
    							<th >
    								<a href="" class="badge badge-success">edit</a>
    								<a href="" class="badge badge-danger">delete</a>
    							</th>
    						</tr>
    						@endforeach
    					</tbody>
    				</table>
				</div>
			</div>
		</div>
@endsection




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       	<form method="post" action="{{ url('mahasiswa') }}" enctype="multipart/form-data" >
				  <div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="nama" class="form-control" id="nama" name="nama" placeholder="Nama Anda">
				  </div>	
				   <div class="form-group">
				    <label for="nrp">nrp</label>
				    <input type="number" class="form-control" id="nrp" name="nrp" placeholder="nrp Anda">
				  </div>				  
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
				  </div>
				  <div class="form-group">
				    <label for="jurusan">Jurusan</label>
				    <select class="form-control" id="jurusan" name="jurusan">
				      <option>1</option>
				      <option>2</option>
				      <option>3</option>
				      <option>4</option>
				      <option>5</option>
				    </select>
				  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
				</form>
    </div>
  </div>
</div>