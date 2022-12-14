@extends('...public.main')

@section("title_content", "Jadwal Praktik")

@section("page_title" , "Jadwal Praktik")

@section("breadcrumb")
    <ol class="breadcrumb">
        <li class="breadcrumb-item ">
            Home
        </li>
        <li class="breadcrumb-item active">
            Jadwal Praktik
        </li>
    </ol>
@endsection
@section('content')
<section class="section dashboard">
    <div class="row">
        
        <div class="col-lg-12">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if (session()->has('updateGagal'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('updateGagal') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card" style="margin-top: 20px;">
                
                <div class="card-body">
                    <br>
                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Hari</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jam</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no=0; 
                            @endphp
                            @foreach($dataJadwal as $item)
                            @php
                            $no++
                            @endphp 
                            <tr>
                                <th scope="row">{{ $no }}</th>
                                <td>{{ $item->hari }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->jam }}</td>
                                {{-- <td class="text-center"> --}}
                                    <td>
                                        <a href="/jadwalpraktik/edit/" class="btn  btn-sm btn-warning">
                                            Edit 
                                        </a>
                                    </td>
                                </tr>
                                
                                @endforeach
                                
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                        
                    </div>
                </div>
            </div>
            
        </div>
        
    </section>
    
@endsection
    