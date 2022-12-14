@extends('mainDokter')
@section('content')
    <section class="section dashboard">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <div class="text-left">
                        <button type="cencel" class="btn btn-primary"  >cetak</button>
                    </div>
                    <br>
                    <div class="row mb-10">
                        <label for="inputDate" class="col-sm-1 col-form-label">Date</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-sm-3">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-sm-3">
                            <button type="selesai" class="btn btn-secondary" >filter</button>
                        </div>
                    </div>
                    <br>
                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id Pasien</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">Keluhan</th>
                                <th scope="col">Diagnosa</th>
                                <th scope="col">Tanggal Periksa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" style="text-align: center">1</th>
                                <td>PS001</td>
                                <td>Sri Rahayu Apriyani</td>
                                <td>gatal gatal</td>
                                <td>alergi</td>
                                <td>01/10/2022</td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-align: center">2</th>
                                <td>PS002</td>
                                <td>Siti Afrida Fitriyani</td>
                                <td>sakit tenggorokan</td>
                                <td>radang</td>
                                <td>02/10/2022</td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-align: center">3</th>
                                <td>PS003</td>
                                <td>Widia Rahani</td>
                                <td>panas dan flu</td>
                                <td>demam</td>
                                <td>03/10/2022</td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-align: center">4</th>
                                <td>PS004</td>
                                <td>Yuan Diana</td>
                                <td>nyeri ulu hati</td>
                                <td>magh</td>
                                <td>04/10/2022</td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                    
                </div>
            </div>
        </div> 
    </section>
@endsection