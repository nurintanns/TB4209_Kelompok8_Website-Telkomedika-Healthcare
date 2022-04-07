@extends('layouts.master')

@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					 <div class="row">
                <div class="col-md-12">
                    <!-- TABLE HOVER -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tambah Data Dokter</h3>

                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ route('dokter.create') }}" method="POST"  enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group {{ $errors->has('name') ? 'has-error':'' }}">
                                            <label for="exampleInputEmail1">Nama Dokter</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Masukkan Nama Dokter"
                                                value="{{ old('name') }}">
                                            @if($errors->has('name'))
                                            <span class="help-block">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>

                        

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Keahlian</label>
                                            
                                            <select class="form-control" id="exampleFormControlSelect1" name="keahlian">
                                           <option selected >Pilih Keahlian Dokter</option>
                                                <option value="mata">Mata</option>
                                                <option value="kulit">Kulit</option>
                                                <option value="telinga">Telinga</option>
                                                <option value="jantung">Jantung</option>
                                                

                                            </select>
                                        </div>

                                        <div class="form-group {{ $errors->has('no_telpon') ? 'has-error':'' }}">
                                            <label for="exampleInputEmail1">No telpon</label>
                                            <input type="text" name="no_telpon" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="No Telpon"
                                                value="{{ old('no_telpon') }}">
                                            @if($errors->has('no_telpon'))
                                            <span class="help-block">{{ $errors->first('no_telpon') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('email') ? 'has-error':'' }}">
                                            <label for="exampleInputEmail1">email</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Masukkan Email"
                                                value="{{ old('email') }}">
                                            @if($errors->has('email'))
                                            <span class="help-block">{{ $errors->first('keahlian') }}</span>
                                            @endif
                                        </div>

                                        {{-- <div class="form-group {{ $errors->has('email') ? 'has-error':'' }}">
                                            <label for="exampleInputEmail1">Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Masukkan password"
                                                value="{{ old('password') }}">
                                            @if($errors->has('password'))
                                            <span class="help-block">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div> --}}

                                    <div class="input-group">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Foto</label>
                                            <input type="file" name="foto" class="form-control">
                                        </div>
                                     </div>

                                        <input type="submit" class="btn btn-info" value="Tambah Data"></input>  
                                </div>
                                 </form>
                                
                            
                       
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