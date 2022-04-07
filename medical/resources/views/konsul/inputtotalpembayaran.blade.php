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
                            <h3 class="panel-title">Input Total Pembayaran</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <form action="/datakonsultasipasien/{{ $data->id }}/inputtotalpembayaranupdate" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        
                                            <div class="form-group {{ $errors->has('email') ? 'has-error':'' }}">
                                            <label for="exampleInputEmail1">Total Pembayaran</label>
                                            <input type="text" name="total_pembayaran" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Masukkan total_pembayaran"
                                                value="{{ old('total_pembayaran') }}">
                                            @if($errors->has('total_pembayaran'))
                                            <span class="help-block">{{ $errors->first('total_pembayaran') }}</span>
                                            @endif
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










