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
                            <h3 class="panel-title">Data Konsul Selesai</h3>
                            <div class="right">
                            
                            </div>
                        </div>

                    
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pasein</th>
                                        <th>Nama Dokter</th>
                                        <th>Jam Konsultasi</th>
                                        <th>Tanggal Konsultasi</th>
                                        <th>Total Pembayaran</th>
                                       
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                 @php $no=1; @endphp
                                @foreach ($data as $data )
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->user->name }}</td>
                                        <td>{{ $data->jadwal->user->name }}</td>
                                        <td>{{ $data->jadwal->jam_kerja }}</td>
                                        <td>{{ $data->jadwal->tanggal }}</td>
                                        <td>{{ $data->total_pembayaran }}</td>
                                        <td><span class="label label-success">{{ $data->status_pengiriman }}</span></td>
                                        
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

@section('footer')

   

@stop

