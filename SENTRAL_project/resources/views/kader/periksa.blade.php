@extends('layouts/dashboard')

@section('title','Periksa Balita')

@section('container')
	
	  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  <strong>Periksa Balita</strong>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- table -->
				  	<div class="container">
					    <form action="/cek/{{$bayi->id}}" method="post">
                {{ csrf_field() }}
              <fieldset disabled>
                <div class="form-group col-auto my-1 mt-2">
                  <label for="disabledTextInput">Nama Balita</label>
                  <input type="text" id="disabledTextInput" class="form-control" value="{{ $bayi->nama }}">
                </div>
                <div class="form-group col-auto my-1 mt-2">
                  <label for="disabledTextInput">Usia</label>
                  <input type="text" id="disabledTextInput" class="form-control" value="{{ $bayi->usia }} bulan">
                </div>
                <div class="form-group col-auto my-1 mt-2">
                  <label for="disabledTextInput">Jenis Kelamin</label>
                  <input type="text" id="disabledTextInput" class="form-control" value="{{ $bayi->jenis_kelamin }}">
                </div>
              </fieldset>
						  <div class="form-group col-auto my-1 mt-2">
						    <label for="inputBerat">Berat Badan</label>
						    <input type="text" class="form-control" id="" name="berat" placeholder="Masukan Berat Badan (Kg)">
						  </div>
						  <div class="form-group col-auto my-1 mt-2">
						    <label for="inputTinggi">Tinggi Badan</label>
						    <input type="text" class="form-control" id="" name="tinggi" placeholder="Masukan Tinggi Badan (cm)">
						  </div>
<!-- 						  <div class="form-group col-auto my-1 mt-2">
						    <label for="inputLingkar">Lingkar Kepala</label>
						    <input type="text" class="form-control" id="" name="lingkar" placeholder="Masukan Lingkar Kepala (cm)">
						  </div> -->
              <div class=" form-group col-auto my-1 mt-3">
              <button type="submit" class="btn btn-primary">Periksa Balita</button>                
              </div>

						</form>
					</div>
                </div>
              </div><!-- /.card-body -->
            </div>
          </section> 
     </div>             	
  </div>
	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
@endsection

