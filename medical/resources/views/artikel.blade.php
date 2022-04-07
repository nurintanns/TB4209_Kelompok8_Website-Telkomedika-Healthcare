@extends('layouts.app')

@section('content')
<div class="container-fluid pr-5 pl-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #800000; color: whitesmoke;">
                    <h4>Artikel</h4>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="row mt-3 justify-content-center">
                        @foreach ($data as $data)
                        <div class="col-md-3 mt-4">
                            <div class="card-deck">
                                <div class="card">
                                    <img src="{{ $data->gambar() }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $data->judul }}</h5>
                                        <p class="card-text">{{ $data->deskripsi }}.</p>
                                    </div>
                                    <div class="card-footer">

                                  
                                        <small class="text-muted">{{ $data->created_at->diffForhumans() }} By : {{ $data->user->name }}</small>
                                        <br>
                                       
                                        <a href="/artikel/{{ $data->id }}/detail" class="btn btn-primary ml-auto"
                                            style="background-color: #800000; color: whitesmoke;">Detail</a>
                                    </div>

                                </div>

                            </div>
                        </div>
                        @endforeach

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection