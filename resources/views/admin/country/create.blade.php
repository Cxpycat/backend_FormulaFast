@extends('admin.layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row m-2">
                <form action="{{route('country.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <h1>Добавить страну</h1>
                    </div>
                    <div class="form-group">
                        <label for="title">Название</label>
                        <input type="text" class="form-control" name="title" placeholder="Название">
                        @error('title')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <img id="result" src="" style="max-width: 250px; max-height: 250px">
                    </div>
                    <div class="form-group">
                        <label for="imgFile">Изображение</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="imgFile" name="img">
                                <label class="custom-file-label img-name" for="imgFile"></label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузка</span>
                            </div>
                        </div>
                        @error('img')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('adminlte/js/preview_img.js')}} "></script>
@endsection
