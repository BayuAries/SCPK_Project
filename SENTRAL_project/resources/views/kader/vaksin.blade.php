@extends('layouts/dashboard')

@section('title','Data Vaksin')

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
                  Data Vaksin
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="col-6">
                   <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Data Vaksin</button>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data Vaksin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="/vaksin/tambah" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                <label for="nam">Nama Vaksin</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama Vaksin" required name="nama" autocomplete="nama" autofocus>
                                @error('nama')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="usia">Untuk Usia</label>
                                <input type="text" class="form-control @error('usia') is-invalid @enderror" id="usia" placeholder="Masukan Usia (bulan)" required="required" name="usia" autocomplete="usia" autofocus>
                                @error('usia')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-primary" >Tambah Data</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                 </div>

                <div class="col-lg-12">
                  @if (session('status'))
                      <div class="alert alert-success my-3">
                          {{ session('status') }}
                      </div>
                  @endif
                </div>

                <div class="tab-content p-0">
                  <!-- table -->

                    <div class="container-fluid">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Usia (Bulan)</th> 
                            <th scope="col">Opsi</th>             
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($vaksin as $data)
                          <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->bulan}}</td>
                            <td>
                              <a href="/vaksin/edit/{{$data->id}}" class="btn btn-info" role="button" aria-pressed="true">Edit</a>|
                              <a href="#" class="btn btn-danger konfirmasi" data-id="{{$data->id}}" >Delet</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div> 
                    <div class="col-md-4 mt-3">
                      {{ $vaksin -> links() }}
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

@section('footer')
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script>
      $('.konfirmasi').click(function(){
        var id = $(this).attr('data-id');
        Swal.fire({
          title: 'Anda yakin ingin menghapus data ?',
          text: "Data tidak akan bisa di kembalikan!",
          icon: 'warning',
          showCancelButton:  true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus data !'
        }).then((result) => {
          if (result.value) {
            Swal.fire(
              'Deleted!',
              'Data Berhasil dihapus.',
              'success'
            ).then((result) => {
              if(result.value){
                window.location = '/vaksin/'+id+'/delet';
              }
            })
          }
        })
      });
  </script>
@endsection