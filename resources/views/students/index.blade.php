@extends('layout.main')

@section('title','Student')

@section('container')
		<div class="container">
			<div class="row">
				<div class="col-6">
    				<h1 class="mt-3">Student</h1>
							@if (\Session::has('status'))
					      <div class="alert alert-success">
					        <p>{{ \Session::get('status') }}</p>
					      </div><br />
					     @endif
					<a href="/students/create" class="btn btn-success mt-2 mb-2" >Tambah Data Mahasiswa</a>
    				<ul class="list-group">
                    @foreach($students as $student)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{$student->nama}}
                            <a href="/students/{{$student->id}}" class="badge badge-info">detail</a>
                        </li>
                    @endforeach
                    </ul>
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