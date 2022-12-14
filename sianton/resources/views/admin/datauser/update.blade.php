@extends('mainAdmin')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                    
                    <div class="d-flex justify-content-center py-4">
                        
                    </div><!-- End Logo -->
                    
                    <div class="card mb-3" style="height: 400px;width: 350px;">
                        
                        <div class="card-body">
                            
                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Edit Data Admin</h5>
                                
                            </div>
                            
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-4"><br>
                                    <label for="hari" class="form-label">Id Admin</label>
                                    <input type="text" name="hari" class="form-control" id="hari" required>
                                    {{-- <div class="invalid-feedback">Please, enter your name!</div> --}}
                                </div>
                                <div class="col-8"><br>
                                    <label for="tanggal" class="form-label">Nama</label>
                                    <input type="text" name="tanggal" class="form-control" id="tanggal" required>
                                    {{-- <div class="invalid-feedback">Please, enter your name!</div> --}}
                                </div>
                                <div class="col-12">
                                    <label for="jam" class="form-label">No. Telp</label>
                                    <input type="text" name="jam" class="form-control" id="jam" required>
                                    {{-- <div class="invalid-feedback">Please, enter your name!</div> --}}
                                </div>
                                
                                
                                <div class="col-12"><br>
                                    <button type="reset" class="btn btn-secondary">Kembali</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    
                                </div>
                                
                            </form>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </section>
@endsection