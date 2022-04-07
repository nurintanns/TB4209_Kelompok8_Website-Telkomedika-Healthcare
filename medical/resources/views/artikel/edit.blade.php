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
                            <h3 class="panel-title">Edit Data</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <form action="/artikel/{{ $data->id }}/update" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <div class="form-group {{ $errors->has('judul') ? 'has-error':'' }}">
                                            <label for="exampleInputEmail1">Judul Artikel</label>
                                            <input type="text" name="judul" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Masukkan Judul Artikel"
                                                value="{{ $data->judul }}">
                                            @if($errors->has('judul'))
                                            <span class="help-block">{{ $errors->first('judul') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('deskripsi') ? 'has-error':'' }}">
                                            <label for="exampleFormControlTextarea1">deskripsi</label>
                                            <textarea name="deskripsi" class="form-control"
                                                id="exampleFormControlTextarea1"
                                                rows="3">{{ $data->deskripsi }}</textarea>
                                            @if($errors->has('deskripsi'))
                                            <span class="help-block">{{ $errors->first('deskripsi') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('isi') ? 'has-error':'' }}">
                                            <label for="exampleFormControlTextarea1">isi</label>
                                            <textarea name="isi" class="form-control" id="editor"
                                                rows="3">{{ $data->isi }}</textarea>
                                            @if($errors->has('isi'))
                                            <span class="help-block">{{ $errors->first('isi') }}</span>
                                            @endif
                                        </div>
                                </div>
                                <div class="col-md-4">
                            <div class="input-group">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">thumbnail</label>
                                    <input type="file" name="thumbnail" class="form-control">
                                </div>
                            </div>

                            <br>
                                <img src="{{ $data->gambar() }}" style="margin-top:15px;max-height:100px;">

                            {{-- <div class="input-group">
                                <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                </span>
                                <input id="thumbnail" class="form-control" type="text" name="thumbnail">
                                </div>
                                <img id="holder" style="margin-top:15px;max-height:100px;"> --}}

                            
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
    <!-- END MAIN CONTENT -->
</div>

<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
            var options = {
                
            };
    </script>
    <script>
        CKEDITOR.replace( 'editor', {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        });
    </script>
@stop

@section('footer')

@stop