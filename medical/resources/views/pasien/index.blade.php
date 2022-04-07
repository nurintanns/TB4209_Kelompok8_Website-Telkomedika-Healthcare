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
                            <h3 class="panel-title">Data Pasien</h3>
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
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                @php $no=1;  @endphp
                                @foreach ($user as $data )
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->no_telpon }}</td>
                                        <td>{{ $data->email }}</td>
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
            var desa_id = $(this).attr('desa-id');
            swal({
                    title: "Yakin",
                    text: "Mau Menghapus Desa dengan id "+desa_id+"",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/desa/"+desa_id+"/delete"
                        swal("Desa Dengan ID "+desa_id+" Behasil DI Hapus", {
                        icon: "success",
                        });
                    } else {
                        swal("Data Tidak Jadi di Hapus");
                    }
                    });
             });

        
    </script>

@stop

