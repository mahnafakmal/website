@extends('layouts.main')


@section('content')
<h1>Profile</h1>
<div style="display:flex; justify-content:center; width:100%; margin-top:20px;">
    <div style="
        width: 450px;
        padding: 25px;
        border-radius: 16px;
        background: white;
        box-shadow:0 5px 20px rgba(0, 0, 0, 0.15);
    ">
 <img src="{{ $img }}" style="width:150px; border-radius:10px;">

  <h3>{{ $nama }}</h3>
  <p>{{ $nohp }}</p>

  
    </div>
</div>



@endsection
