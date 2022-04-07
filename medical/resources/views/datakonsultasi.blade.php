@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #800000; color: whitesmoke;">{{ __('Data Konsul') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Data Konsultasi Kamu') }}
                    <br>
                    <br>
                    
                    <table class="table">
                        <thead  style="background-color: #800000; color: whitesmoke;">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">Jam Konsul</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Status</th>
                                {{-- <th scope="col">Resep Obat</th> --}}
                                <th scope="col">Total Bayar</th>
                                <th scope="col">bukti Pembayaran</th>
                                <th scope="col">Alamat Pengiriman</th>
                                <th scope="col">Status Pengiriman</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        @php $no =1; @endphp
                         @foreach ($data as $data)
                         
                        <tbody>
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $data->jadwal->user->name }}</td>
                                <td>{{ $data->jadwal->jam_kerja }}</td>
                                <td>{{ $data->jadwal->tanggal }}</td>
                                <td>
                                @if($data->status == 'pending')
                                <button type="button" class="btn btn-danger btn-sm">{{ $data->status }}</button>
                                @elseif($data->status == 'konsultasi')
                                <button type="button" class="btn btn-warning btn-sm">{{ $data->status }}</button>
                                @else
                                <button type="button" class="btn btn-success btn-sm">{{ $data->status }}</button>
                                @endif
                                </td>
                                {{-- <td><img src="{{ $data->gambarresep() }}"  alt=""
                                                style="width: 100px;"></td></td> --}}

                                                
                                <td>Rp. {{ number_format($data->total_pembayaran, 0, '', '.')  }}</td>
                                <td>
                                @if(is_null($data->bukti_pembayaran))
                                <a href="/datakonsultasipasien/{{ $data->id }}/inputbuktipembayaran"  type="button" class="btn btn-info btn-sm">upload bukti pembayaran</a>
                                @else 
                                <img src="{{ $data->gambarpembayaran() }}"  alt=""
                                    style="width: 100px;"></td>
                                @endif
                                </td>

                                <td>{{ $data->alamat }}</td>
                                <td>
                                        @if(is_null($data->status_pengiriman))
                                       
                                     
                                         <button type="button" class="btn btn-danger btn-sm">Pending</button>
                                         @elseif($data->status_pengiriman =='dikirim')
                                         <button type="button" class="btn btn-warning btn-sm">Dalam Perjalanan</button>
                                      
                                        @elseif($data->status_pengiriman =='selesai')
                                        <button type="button" class="btn btn-success btn-sm">Diterima</button>
                                        
                                         @endif
                                        </td>

                                <td>
                                @if($data->status == 'pending')
                                    <a href="/datakonsultasipasien/{{ $data->id }}/{{ $data->jadwal_id }}/updatestatus" type="button" class="btn btn-warning btn-sm">Konsul</a>
                                @elseif($data->status == 'konsultasi')
                                     <a target="_blank" href="https://api.whatsapp.com/send?text=Hallo dokter saya {{ $data->user->name }}&phone={{ $data->jadwal->user->no_telpon }}" type="button" class="btn btn-success btn-sm">Chat</a>
                                @endif
                                
                                @if($data->status_pengiriman == 'dikirim')
                                 <a href="/datakonsultasipasien/{{ $data->id }}/updatepengiriman" type="button" class="btn btn-info btn-sm">Obat di terima</a>
                                 @elseif($data->status_pengiriman == 'selesai')
                                  <a href="#" type="button" class="btn btn-success btn-sm">Finish</a>
                                @endif

                              

                                
                                </td>
                                
                            </tr>
                        </tbody>

                          @endforeach
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection