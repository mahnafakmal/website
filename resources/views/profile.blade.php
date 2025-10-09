@extends('layouts.main')


@section('content')
  <h1>Profile</h1>

  <h3>{{ $nama }}</h3>
  <p>{{ $nohp }}</p>
  <img src="{{ $img }}" width="200px">


@endsection
