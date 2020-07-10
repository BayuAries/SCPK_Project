@extends('layouts.dashboard')

@section('title','Daftar Orang Tua')

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
                  <strong>Form Pendaftar Orang Tua</strong>
                </h3>
              </div><!-- /.card-header -->

              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Form Daftar -->
                      <form action="/daftar_ortu/store" method="post">
                          {{ csrf_field() }}
                      <div class="form-group">
                        <label for="inputNama">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control"  required="required">
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputtlp">No.Telpon</label>
                          <input type="text" class="form-control" name="no_tlp" required="required">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputtinggal">Alamat Tinggal</label>
                          <input type="text" class="form-control" name="alamat" required="required">
                        </div>
                        <button type="submit" class="btn btn-primary" onclick="">Daftar</button>
                      </div>
                     </form>
                </div>
              </div><!-- /.card-body -->
              <div class="col-lg-12">
                @if (session('status'))
                    <div class="alert alert-success my-3">
                        {{ session('status') }}
                    </div>
                @endif
              </div>
            </div>
          </section> 
        </div> 
    </div>    
@endsection

