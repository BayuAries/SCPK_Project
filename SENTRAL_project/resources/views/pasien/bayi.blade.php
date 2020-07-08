@extends('layouts/dashboard')

@section('title','Data Bayi')

@section('container')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>

    <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Data Anak
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- table -->

                    <div class="container-fluid">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nama Orang Tua</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Usia (Bulan)</th>            
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($bayi as $data)
                          <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->ortu->nama}}</td>
                            <td>{{$data->tanggal_lahir}}</td>
                            <td>{{$data->usia}}</td>
                            <td>{{$data->jenis_kelamin}}</td>
                            <td>
                              <a href="/periksa/{{$data->id}}" class="btn btn-info" role="button" aria-pressed="true">Periksa Anak</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div> 
                    <div class="col-md-4 mt-3">
                      {{ $bayi -> links() }}
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

