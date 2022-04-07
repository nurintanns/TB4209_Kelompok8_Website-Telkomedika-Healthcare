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
                            <h3 class="panel-title">Data Artikel</h3>
                            <div class="right">
                            <a href="{{ route('artikel.add') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                            </div>
                        </div>

                    
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Di Buat</th>
                                        <th>Thumbnail</th> 
                                        <th>Status</th> 
                                         <th>Populer</th> 
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @php $no=1; @endphp
                                @foreach ($data as $data )
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->judul }}</td>
                                        <td>{{ $data->created_at }}</td>

                                        <td><img src="{{ $data->gambar() }}"  alt=""
                                                style="width: 100px;"></td>
                                        
                                        <td>
                                        @if($data->status == 'publish')
                                            <span class="label label-success">{{ $data->status }}</span>
                                            @elseif($data->status == 'pending')
                                            <span class="label label-danger">{{ $data->status }}</span>
                                            @else
                                            <span class="label label-primary">{{ $data->status }}</span>
                                            @endif </td>
                                        </td>

                                         
                                        <td>
                                        @if($data->status_populer == 'populer')
                                        <a href="/artikel/{{ $data->id }}/updatestatuspopuler"><span  class="label label-success">yes</span></a>
                                            @elseif($data->status_populer == 'tidak_populer')
                                            <a href="/artikel/{{ $data->id }}/updatestatuspopuler"><span class="label label-danger">no</span></a>
                                            @else
                                            <span class="label label-primary">{{ $data->status_populer }}</span>
                                            @endif </td>
                                        </td>
                                        
                                        
                                      

                                        <td>
                                            {{-- <a target="_blank"  href="" class="btn btn-primary btn-sm">View</a> --}}
                                            <a href="/artikel/{{ $data->id }}/edit"class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/artikel/{{ $data->id }}/updatestatus"class="btn btn-info btn-sm">Update Status</a>
                                            <a href="#" class="btn btn-danger btn-sm delete " data-id="{{ $data->id }}" >Delete</a>

                                            
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

    <script>
        $('.delete').click(function(){
            var data_id = $(this).attr('data-id');
            swal({
                    title: "Yakin",
                    text: "Mau Delete Artikel dengan id "+data_id+"",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/artikel/"+data_id+"/delete"
                        swal("Artikel Dengan ID "+data_id+" Behasil DI Hapus", {
                        icon: "success",
                        });
                    } else {
                        swal("Data Tidak Jadi di Hapus");
                    }
                    });
             });

        
    </script>

@stop


