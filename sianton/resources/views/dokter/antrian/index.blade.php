@extends('main')
@section('content')
    <section class="section dashboard">
        <div class="col-lg-12">
            
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ }}</h5>
                    
                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id antrian</th>
                                <th scope="col">Tanggal Periksa</th>
                                <th scope="col">Id pasien</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">No Antrian</th>
                                <th scope="col" style="text-align: center">Verifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataAntrian as $item)
                            <tr>
                                <th scope="row" style="text-align: center">1</th>
                                <td>{{$item->idAntrian}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->idPasien}}</td>
                                <td>{{$item->nama}}</td>
                                <td> {{$item->noAntrian}} </td>
                                <td> 
                                    <a href="/antrian/edit/{{ $item->kodeJadwal }}" class="btn  btn-sm btn-warning">
                                        <i class="bi bi-check-square-fill"></i>Edit
                                    </a>
                                    <a href="/jadwalpraktik/edit/{{ $item->kodeJadwal }}" class="btn  btn-sm btn-warning">
                                        <i class="bi bi-x-square-fill"></i>>Edit
                                    </a> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                    
                </div>
            </div>
        </div>
    </section>
@endsection
