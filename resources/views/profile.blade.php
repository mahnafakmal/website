@extends('layouts.main')


@section('content')
<h1>Profile</h1>
 <img src="{{ $img }}" style="width:150px; border-radius:10px;">

  <h3>{{ $nama }}</h3>
  <p>{{ $nohp }}</p>




@endsection
