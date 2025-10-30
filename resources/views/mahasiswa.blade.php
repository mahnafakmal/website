@extends('layouts.main')


@section('content')
  <h1>Data Mahasiswa</h1>
<table class="table">
 <div class="row mt-4"></div>

 <button type="button" class="btn byn-success nb-2">Tambah Data</button><br>
<thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
      <th scope="col">Prodi</th>
      <th scope="col">Email</th>
      <th scope="col">No.Hp</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>



<?php $i=1 ?>


<tr>

  <th scope="row"><?php echo $i ?></th>

<td>{{ $mahasiswa["name"] }}</td>

<td>{{ $mahasiswa["nin"] }}</td>

<td>{{ $mahasiswa["prodi"]}}</td>

<td>{{ $mahasiswa ["email"]}}</td>

<td>{{ $mahasiswa["nohp"] }}</td>

<td>

<button type="button" class="btn btn-primary">Edit</button>

<button type="button" class="btn btn-danger">Hapus</button>

</td>

<?php $i++ ?>

</tr>





</tbody>



</table>

 


@endsection