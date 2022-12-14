@extends('mainDokter')
@section('content')
    <section class="section dashboard">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $title }}</h5>
                    
                    <!-- Vertical Form -->
                    <form class="row g-3">
                        <div class="col-12">
                            <label for="inputIdpasien" class="form-label">Id pasien</label>
                            <input type="text" class="form-control" id="inputIdpasien">
                        </div>
                        <div class="col-12">
                            <label for="inputKeluhan" class="form-label">Keluhan</label>
                            <input type="email" class="form-control" id="inputKeluhan">
                        </div>
                        <div class="col-12">
                            <label for="inputDiagnosa" class="form-label">Diagnosa</label>
                            <input type="password" class="form-control" id="inputDiagnosa">
                        </div>
                        <div class="text-left">
                            <button type="cencel" class="btn btn-primary"  >cancel</button>
                            <button type="selesai" class="btn btn-secondary" >selesai</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection