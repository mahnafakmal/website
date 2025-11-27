@extends('layouts.main')


@section('content')
  <h1>Kontak</h1><br>
 <div style="display:flex; justify-content:center; width:100%; margin-top:20px;">
    <div style="
        width: 450px;
        padding: 25px;
        border-radius: 16px;
        background: white;
        box-shadow:0 5px 20px rgba(0, 0, 0, 0.15);
    ">
  <img src="{{ $img }}" style="width:170px; border-radius:10px;"> 
  <h2>perkenalkan nama saya Ahnaf </h2> 
  <h3>asal Pekalongan</h3> <br>
     <a href="https://instagram.com/akmllhnf_" target="_blank" 
           style="text-decoration:none; color:#000; font-weight:500;">
            @akmllhnf_
        </a>
  </div>
</div>


@endsection