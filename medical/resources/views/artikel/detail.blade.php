@extends('layouts.app')

@section('content')
<div class="container-fluid pr-5 pl-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #800000; color: whitesmoke;">
                    <h3>Artikel</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif



                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card border-0">
                                
                                <img class="" src="{{ $data->gambar() }}" style="width: 700px; align-self: center;"
                                    alt="">
                                <div class="card-body">
                                    <h3 class="card-title"><b>{{ $data->judul }}</b> </h3>
                                    {{ $data->created_at->format('Y-m-d') }} || by : {{ $data->user->name }}
                                    <p class="card-text">{!! $data->isi !!}</p>
                                    <a href="/artikelhome" class="btn btn-primary"
                                        style="background-color:#EB4880; color: whitesmoke;">back</a>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection