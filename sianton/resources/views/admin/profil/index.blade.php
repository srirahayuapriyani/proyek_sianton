
@extends('mainAdmin')
@section('content')
<section class="section dashboard">
    
    <div class="card mb-6 col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center" >
            
            <div class="card-body" >
                <h5 class="card-title text-center pb-0 fs-4">Edit Data Admin</h5>
                
                
                <form class="row g-3 needs-validation" action="" method="" novalidate>
                    @csrf
                    <input type="hidden" name="kodeJadwal" value="">
                    <div class="col-4"><br>
                        <label for="kodeJadwal" class="form-label">Kode Jadwal</label>
                        <input type="text" name="kodeJadwal" class="form-control" id="kodeJadwal" value="" disabled>
                        
                    </div>
                    <div class="col-8"><br>
                        <label for="hari" class="form-label">Hari</label>
                        <input type="text" name="hari" class="form-control @error('hari') is-invalid @enderror" id="hari"  value=""required>
                        @error('hari')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal"  value="" required>
                        @error('tanggal')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="jam" class="form-label">Jam</label>
                        <input type="time" name="jam" class="form-control @error('jam') is-invalid @enderror" id="jam"  value=""required>
                        @error('jam')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    
                    <div class="col-12 text-end" style="margin-top: 30px;margin-bottom: 24px;">
                        <button type="/jadwalpraktik" class="btn btn-secondary">Kembali</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        
                    </div>
                    
                </form> 
                
            </div>
        </div>
    <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">
        
        
        
    </div>
    
    
</section>
@endsection 