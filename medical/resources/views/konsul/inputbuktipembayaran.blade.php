@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Upload Bukti Pembayaran') }}
                    <br>
                    <br>

                    <form action="/datakonsultasipasien/{{ $data->id }}/inputbuktipembayaranupdate" method="POST" enctype="multipart/form-data">
                     {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Masukkan Bukti Pembayaran</label>
                       <input type="file" class="form-control-file" name ="bukti_pembayaran" id="exampleFormControlFile1">
                    </div>

                    <input type="submit" class="btn btn-warning" value="Upload"></input>
                    </form>

                  
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection