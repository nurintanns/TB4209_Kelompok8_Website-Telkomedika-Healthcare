@extends('layouts.master')

@section('content')

<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
           <div class="row">
                <div class="col-md-12">
                    <!-- TABLE HOVER -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Upload Data Resep</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <form action="/datakonsultasipasien/{{ $data->id }}/update" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        
                                            <div class="input-group">
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Foto Resep</label>
                                                <input type="file" name="resep" class="form-control">
                                            </div>
                                             </div>
            
                            <br>
                            <input type="submit" class="btn btn-warning" value="Update Data"></input>
                        </form>
                        </div>
                    </div>
                    <!-- END TABLE HOVER -->
                </div>
            </div>
            </div>
        </div>

    </div>
    <!-- END MAIN CONTENT -->
</div>


@stop

@section('footer')

   

@stop










