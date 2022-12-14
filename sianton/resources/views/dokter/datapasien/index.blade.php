@extends('mainDokter')
@section('content')
    <section class="section dashboard">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $title }}</h5>
                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">Tanggal Periksa</th>
                                <th scope="col">Keluhan</th>
                                <th scope="col">Diagnosa</th>
                                <th scope="col" style="text-align: center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" style="text-align: center">1</th>
                                <td>Sri Rahayu Apriyani</td>
                                <td>01/10/2022</td>
                                <td>gatal gatal</td>
                                <td>alergi</td>
                                <td> <i class="bi bi-pencil-square"></i> </td>
                                
                                
                                
                            </tr>
                            <tr>
                                <th scope="row" style="text-align: center">2</th>
                                <td>Siti Afrida Fitriyani</td>
                                <td>02/10/2022</td>
                                <td>sakit tenggorokan</td>
                                <td>radang</td>
                                <td> <i class="bi bi-pencil-square"></i> </td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-align: center">3</th>
                                <td>Widia Rahani</td>
                                <td>03/10/2022</td>
                                <td>panas dan flu</td>
                                <td>demam</td>
                                <td> <i class="bi bi-pencil-square"></i> </td>
                            </tr>
                            <tr>
                                <th scope="row" style="text-align: center">4</th>
                                <td>Yuan Diana</td>
                                <td>04/10/2022</td>
                                <td>nyeri ulu hati</td>
                                <td>magh</td>
                                <td> <i class="bi bi-pencil-square"></i> </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                </div>
            </div>
        </div> 
    </section>
@endsection