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
                            <h3 class="panel-title">Tambah Data Jadwal Baru</h3>

                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{ route('jadwalkonsul.create') }}" method="POST">
                                        {{ csrf_field() }}
                                       
                                        <div class="form-group {{ $errors->has('tanggal') ? 'has-error':'' }}">
                                            <label for="exampleInputEmail1">Tanggal</label>
                                            <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" 
                                                value="{{ old('tanggal') }}">
                                            @if($errors->has('tanggal'))
                                            <span class="help-block">{{ $errors->first('tanggal') }}</span>
                                            @endif
                                        </div>

                                        
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Jam Kerja</label>
                                            
                                            <select class="form-control" id="exampleFormControlSelect1" name="jam_kerja">
                                            
                                                <option value="08.00 AM - 11.00 AM">08.00 AM - 11.00 AM</option>
                                                <option value="11.00 AM - 02.00 PM">11.00 AM - 02.00 PM</option>
                                                <option value="02.00 PM - 05.00 PM">02.00 PM - 05.00 PM</option>
                                                 

                                            </select>
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