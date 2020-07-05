@extends('layouts/dashboard')

@section('title','Edit Vaksin')

@section('container')
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
                  Data Vaksin
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <form method="post" action="/vaksin/{{$vaksin->id}}/update">
                @csrf
                              <div class="form-group">
                                <label for="nam">Nama Vaksin</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama Vaksin" required name="nama" autocomplete="nama" autofocus value="{{$vaksin->nama}}">
                                @error('nama')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="usia">Untuk Usia</label>
                                <input type="text" class="form-control @error('usia') is-invalid @enderror" id="usia" placeholder="Masukan Usia (bulan)" required="required" name="usia" autocomplete="usia" autofocus value="{{$vaksin->bulan}}">
                                @error('usia')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                              </div>

                  <div class="form-group mt-2">
                    <a href="/vaksin" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary" >Edit Data</button>
                  </div>
                </form>
                </div>
              </div><!-- /.card-body -->

          </section> 
        </div>
                   
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
@endsection


