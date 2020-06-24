@extends('layouts/master')

@section('title','Periksa')

@section('container')

  	<!-- table -->
  	<div class="container">
	    <form>
	      <div class="form-group">
	      	<h5>Nama : Dadang</h5>
	      	<h5>Id : 28</h5>
	      </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Usia</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Berat Badan</label>
		    <input type="" class="form-control" id="">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Tinggi Badan</label>
		    <input type="" class="form-control" id="">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Lingkar Kepala</label>
		    <input type="" class="form-control" id="">
		  </div>
		  <button type="submit" class="btn btn-primary">Cek</button>
		</form>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
@endsection

