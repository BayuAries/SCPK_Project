@extends('layouts.dashboard')

@section('title','Daftar Anak')

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
                  Form Daftar Anak
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Form Daftar -->
                      <form action="/daftar_anak/{{$id}}/store" method="post">
                          {{ csrf_field() }}
                        <div class="form-group col-auto">
                          <label for="inputtinggal">Nama Anak</label>
                          <input type="text" class="form-control" name="nama_anak" required="required">
                        </div>

                        <div class='form-group col-3'>
                          <label class=''>Tanggal Lahir </label>
                          <input class='form-control' type="date" name="tanggal_lahir">
                        </div>

                        <div class="form-group col-auto">
                          <label for="inputjenis">Jenis_kelamin</label>
                            <select id="inputjenis" class="form-control" name="jenis_kelamin">
                              <option selected>pilih...</option>
                              <option value="laki-laki">Laki-laki</option>
                              <option value="perempuan">Perempuan</option>
                            </select>
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