@extends('layout.main')

@section('title','Student')

@section('container')
		<div class="container">
			<div class="row">
				<div class="col-6">
    				<h1 class="mt-3">Form Edit Student</h1>
					<form method="post" action="/students/{{$student->id}}">
						@csrf
						@method('patch')
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" value="{{ $student->nama }}"  class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama">
							@error('nama')
								<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">
							<label for="nrp">NRP</label>
							<input type="text" value="{{ $student->nrp }}" class="form-control  @error('nrp') is-invalid @enderror" id="nrp" name="nrp" placeholder="nrp">
							@error('nrp')
								<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" value="{{ $student->email }}" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email">
							@error('email')
								<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">
							<label for="jurusan">jurusan</label>
							<input type="text" value="{{ $student->jurusan }}" class="form-control" id="jurusan" name="jurusan" placeholder="jurusan">
						</div>
						<button class="btn btn-primary" type="submit">Ubah</button>
						</form>
			</div>
		</div>
@endsection

