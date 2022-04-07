@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #800000; color: whitesmoke;">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Pilih Dokter Untuk Konsultasi') }}
                    <br>
                    <br>

                  <form action="/konsultasi/create" method="POST">
                    {{ csrf_field() }}       
                    @foreach ( $jadwal as $data)
                        
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $data->user->getFoto() }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->user->name }}</h5>
                            <h6 class="card-title">{{ $data->jam_kerja }} </h6>
                            <h6 class="card-title"> Dokter : <b>{{ $data->user->keahlian }}</b> </h6>
                           


                                <input type="hidden" value="{{$data->id}}" name="jadwal_id"/>
                                <input type="hidden" value="{{$data->user->id}}" name="dokter_id"/>
                              @auth
                                @if($data->status=='konsul')
                             <input  class="btn btn-danger" value="Sedang Konsul" disabled></input>
                             @else
                             <input type="submit" class="btn btn-primary" 
                             onclick="return confirm('Kamu yakin akan akan melakukan konsul dengan dokter {{ $data->user->name }}')" 
                             value="Konsultasi"></input>
                             @endif   
                             @endauth
                            @guest
                            <a href ="{{ route('register') }}"class="btn btn-primary" value="Konsultasi">Konsultasi</a>
                            @endguest
                            
                        </div>
                    </div>

                     @endforeach

                     </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection