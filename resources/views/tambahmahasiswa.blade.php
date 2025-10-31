@extends('layouts.main')

@section('content')

    <h1>Tambah Data Mahasiswa</h1>
    <div class="col-8 justify-content-senter"></div>
    <div class="card">
        
    <form action="/insertdata" method="POST" enctype="multipart/form-data">
        @csrf
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="name" placeholder="Nama Lengkap" class="form-control" >
   
  </div>
  <div class="mb-3">
    <label for="nim" class="form-label">Nomor Induk (Nim)</label>
    <input type="number" name="nim"  placeholder="Nomor Induk Mahasiswa" class="form-control" >

  </div>
  <div class="mb-3">
    <label for="prodi" class="form-label">Program Studi (Prodi)</label>
    <input type="text" name="prodi" placeholder="Program Studi" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" placeholder="email" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="nohp" class="form-label">Nomor Henpone (No HP)</label>
    <input type="number" name="nohp" placeholder="Nomor Handphone" class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
     </div> 


@endsection