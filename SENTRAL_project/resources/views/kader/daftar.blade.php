@extends('layouts.master')

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
                  <i class="fas fa-chart-pie mr-1"></i>
                  Form Daftar Kader
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                <!-- Form Daftar -->
                    <form action="/kader/store" method="post">
                        {{ csrf_field() }}
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail">Email</label>
                          <input type="text" class="form-control" name="email" required="required">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword">Password</label>
                          <input type="password" class="form-control" name="password" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputNama">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control"  required="required">
                      </div>
<!--                       <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Check me out
                          </label>
                        </div>
                      </div> -->
                      <button type="submit" class="btn btn-primary">Daftar</button>
                    </form>
                </div>
              </div><!-- /.card-body -->
            </div>
          </section> 
     </div> 
    </div>    
@endsection
