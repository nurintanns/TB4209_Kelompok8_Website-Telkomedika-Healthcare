@extends('layouts.app')

@section('content')
<div class="container-fluid pr-5 pl-5">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/banner1.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Selalu Menjadi Rumah Sakit Terbaik</h5>
                            <p>Selalu jaga kesehatanmu karena kesehatan lebih berharga dari pada uang</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/banner2.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Tidak Enak Badan</h5>
                            <p>Periksalahan dirimu agar kamu selalu sehat</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/banner3.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Periksalah Dirimu</h5>
                            <p>Periksalahan dirimu agar kamu selalu sehat</p>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <br>
        <br>

    </div>

    <div class="row justify-content-center">
        <h1 class="mt-5 "><b>Artikel Populer</b> </h1>
    </div>

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


                        <small class="text-muted">{{ $data->created_at->diffForhumans() }} By :
                            {{ $data->user->name }}</small>
                        <br>

                        <a href="/artikel/{{ $data->id }}/detail" class="btn btn-primary ml-auto"
                            style="background-color: #800000; color: whitesmoke;">Detail</a>
                    </div>

                </div>

            </div>
        </div>
        @endforeach

    </div>





    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="map-wrap mt-5" style="width:100%; height: 445px;"><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7263.589672146742!2d107.63765652501579!3d-6.950161723285691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x65f87d55ea94b7aa!2sKlinik%20Telkomedika%20Buah%20Batu!5e0!3m2!1sid!2sid!4v1607005942019!5m2!1sid!2sid"
                    width="100%" height="545" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>




    @endsection