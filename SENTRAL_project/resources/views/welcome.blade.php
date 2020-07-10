@extends('layouts/master')

@section('title','Posyandu')

@section('container')
<div class="container-fluid">
    <section class="jumbotron jumbotron-fluid text-center " style="">
        <div class="container">
          <h1>Sistem Pengukur Gizi Bayi</h1>
          <div class="row justify-content-center mt-5">
          	<img src="/img/Coronavirus_Hero.jpg" style="" class="img-fluid" alt="Responsive image">
          </div>
          <div class="row justify-content-center mt-3">
          	<a href="/login" class="btn btn-secondary btn-lg my-2 mx-2">Login</a>
          	<a href="/register" class="btn btn-secondary btn-lg my-2 mx-2">Daftar</a>
          </div>
        </div>
    </section>
</div>
@endsection