
@extends('mainAdmin')
@section('content')
<section class="section dashboard">
    <div class="row">
        
        <div class="col-lg-12">
            
            <div class="card" style="margin-top: 20px;">
                <div class="card-body">
                    <h5 class="card-title"> </h5>
                    <!-- Horizontal Form -->
                    <form method="POST" enctype="multipart/form-data" action="/datadokter">
                        {{ csrf_field() }}
                        <div class="row mb-3">
                            <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="logo" name="logo">
                            </div>
                        </div>
                        <br>
                        <div>
                            <h6 style="color:rgb(179, 179, 179)">Menu Tentang</h6>
                        </div>
                        <div class="row mb-3">
                            <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="gambar" name="gambar">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tentang" class="col-sm-2 col-form-label">Tentang</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" style="height: 100px" name="tentang"></textarea>
                            </div>
                        </div>
                        <br>
                        <div>
                            <h6 style="color:rgb(179, 179, 179)">Menu Kontak</h6>
                        </div>
                        <div class="row mb-3">
                            <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lokasi" name="lokasi">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="noTelp" class="col-sm-2 col-form-label">No. Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="noTelp" name="noTelp">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <br>
                        <div class="text-left">
                            <a href="/dashboard" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Make Changes</button>
                            
                        </div>
                        <br>
                    </form><!-- End Horizontal Form -->
                    
                </div>
            </div>
            
        </div>
        <div class="col-lg-12">
            
            <div class="card" style="margin-top: 20px;">
                <div class="card-body">
                    <br>
                    <div class="d-block text-end">
                        <a href="" class="btn btn-warning">
                            Edit
                        </a> 
                        <a href="" class="btn btn-danger">
                            Hapus
                        </a>
                    </div>
                    
                    <!-- Table with stripped rows -->
                    <table class="table table-striped" style="margin-top: 16px;">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Logo</th>
                                <th scope="col">Tentang</th>
                                <th scope="col">Gambar Dokter</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">No. Telp</th>
                                <th scope="col">Email</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                {{-- {{ $loop->iteration }}  --}}
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>2016-05-25</td>
                                <td>2016-05-25</td>
                                <td>2016-05-25</td>
                                <td>2016-05-25</td>
                                <td>widisvweahifwq</td>
                                
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 