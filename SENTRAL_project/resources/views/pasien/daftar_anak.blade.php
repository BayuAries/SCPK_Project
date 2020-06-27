@extends('layouts.dashboard')

@section('title','Daftar')

@section('container')
    
    <div class="content-wrapper">
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Form Daftar Pasien
                </h3>
              </div><!-- /.card-header -->

              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Form Daftar -->
                      <form action="/daftar_anak/store" method="post">
                          {{ csrf_field() }}
                        <div class="form-group col-md-6">
                          <label for="inputtinggal">Nama Anak</label>
                          <input type="text" class="form-control" name="nama_anak" required="required">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputtinggal">Usia Anak</label>
                          <input type="text" class="form-control" name="usia_anak" required="required">
                        </div>
                        <button type="submit" class="btn btn-primary">Daftar</button>
                     </form>
                </div>
              </div><!-- /.card-body -->
            </div>
          </section> 
        </div> 
    </div>    
@endsection