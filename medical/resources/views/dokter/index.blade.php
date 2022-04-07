@extends('layouts.master')

@section('content')

<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
                         {{-- <div class="right">
                            <form class="form-inline" method="GET" action="/desa">
                                <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-primary btn-sm my-2 my-sm-0" type="submit">Search</button>
                            </form>
                            
                            </div>
                            <br> --}}
            <div class="row">
                <div class="col-md-12">
                    <!-- TABLE HOVER -->
                    <div class="panel">
                    <br>
                            
                    
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Dokter</h3>
                            <div class="right">
                            <a href="{{ route('dokter.add') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                            </div>
                        </div>

                    
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Dokter</th>
                                        <th>No Telpon</th>
                                        <th>Email</th>
                                        <th>Keahlian</th>
                                        
                                    </tr>
                                </thead>
                                @php $no=1; @endphp
                                @foreach ($user as $data )
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->no_telpon }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->keahlian }}</td>

                                        
                                    </tr>
                                   
                                </tbody>
                             @endforeach
                                
                            </table>
                            
                            <div>
                            </div>
                           
                            
                        </div>
                    </div>
                    <!-- END TABLE HOVER -->
                </div>
            </div>
        </div>

    </div>
    <!-- END MAIN CONTENT -->
</div>


@stop

