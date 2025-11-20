@extends('layouts.main')

@section('content')

    <h1>Edit Data Mahasiswa</h1>
    <div class="col-8 justify-content-senter"></div>
    <div class="card">
        
    <form action="/editdata/{{$data['id']}}" method="POST" enctype="multipart/form-data">
        @csrf
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="name" value="{{ $data['name'] }}" placeholder="Nama Lengkap" class="form-control" >
   
  </div>
  <div class="mb-3">
    <label for="nim" class="form-label">Nomor Induk (Nim)</label>
    <input type="number" name="nim" value="{{ $data['nim'] }}" placeholder="Nomor Induk Mahasiswa" class="form-control" >

  </div>
  <div class="mb-3">
    <label for="prodi" class="form-label">Program Studi (Prodi)</label>
    <input type="text" name="prodi" value="{{ $data['prodi'] }}" placeholder="Program Studi" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" value="{{ $data['email'] }}" placeholder="email" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="nohp" class="form-label">Nomor Henpone (No HP)</label>
    <input type="number" name="nohp" value="{{ $data['nohp'] }}" placeholder="Nomor Handphone" class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
     </div> 


@endsection