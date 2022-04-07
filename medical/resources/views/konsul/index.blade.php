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
                            <h3 class="panel-title">Data Konsul Hari ini</h3>
                            <div class="right">
                            
                            </div>
                        </div>

                    
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pasein</th>
                                        <th>No Telpon</th>
                                        <th>Jam Konsul</th>
                                        <th>Status</th>
                                        <th>Resep</th>
                                        <th>Aksi</th>
                                        
                                        
                                    </tr>
                                </thead>
                                @php $no=1; @endphp
                                @foreach ($data as $data )
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->user->name }}</td>
                                        <td>{{ $data->user->no_telpon }}</td>
                                        <td>{{ $data->jadwal->jam_kerja }}</td>
                                        <td>
                                        @if($data->status == 'pending')
                                        <button type="button" class="btn btn-danger btn-sm">{{ $data->status }}</button>
                                        @elseif($data->status == 'konsultasi')
                                        <button type="button" class="btn btn-warning btn-sm">{{ $data->status }}</button>
                                        @else
                                        <button type="button" class="btn btn-success btn-sm">{{ $data->status }}</button>
                                        @endif
                                        </td>
                                        <td><img src="{{ $data->gambarresep() }}"  alt=""
                                                style="width: 100px;"></td></td>
                                       <td><a href="/datakonsultasipasien/{{ $data->id }}/{{ $data->jadwal_id }}/updatestatus" type="button" class="btn btn-success btn-sm">Finish</a>
                                       <a href="/datakonsultasipasien/{{ $data->id }}/edit" type="button" class="btn btn-info btn-sm">Upload Resep</a>
                                       </td>
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

