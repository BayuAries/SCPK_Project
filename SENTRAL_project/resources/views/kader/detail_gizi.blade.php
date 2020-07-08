@extends('layouts/dashboard')

@section('title','Detail Gizi')

@section('container')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>

    <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->

            <div class="card ">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                   Nama Bayi : {{$gizi->bayi->nama}}
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- table -->
        				  <div class="container">
        							<div class="card w-100">
                        <div class="card-body col-auto">
                          <h5 class="card-title">Nama Orang Tua</h5>
                          <p class="card-text">{{$gizi->bayi->ortu->nama}}</p>
                        </div>
                        <div class="card-body col-auto">
                          <h5 class="card-title">Usia Periksa </h5>
                          <p class="card-text">{{$gizi->usia}} bulan</p>
                        </div>
                        <div class="card-body col-auto">
                          <h5 class="card-title">Berat Badan</h5>
                          <p class="card-text">{{$gizi->berat_badan}}</p>
                        </div>
        							  <div class="card-body col-auto">
        							    <h5 class="card-title">Hasil Perhitungan Gizi Berdasarkan Berat Badan Per Umur</h5>
        							    <p class="card-text">{{$gizi->bb_u}}</p>
        							  </div>
                        <div class="card-body col-auto">
                          <h5 class="card-title">Tinggi Badan</h5>
                          <p class="card-text">{{$gizi->tinggi}}</p>
                        </div>
                        <div class="card-body col-auto">
                          <h5 class="card-title">Hasil Perhitungan Gizi Berdasarkan Tinggi Badan Per Umur</h5>
                          <p class="card-text">{{$gizi->tb_u}}</p>
                        </div>
                        <div class="card-body col-auto">
                          <h5 class="card-title">Rekomendasi Vaksin</h5>
                          @foreach($vaksin as $data)
                          <p class="card-text">{{$data->nama}}</p>
                          @endforeach
                          @if(empty($vaksin))
                            <p class="card-text">Tida ada rekomendasi vaksin pada usia {{$gizi->usia}} bulan</p>
                          @endif
                        </div>
          						</div>
        						  <a href="/gizi" class="btn btn-info" role="button" aria-pressed="true">Kembali</a>
        					</div>
                  <div class="col-lg-12">
                    @if (session('status'))
                        <div class="alert alert-success my-3">
                            {{ session('status') }}
                        </div>
                    @endif
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

