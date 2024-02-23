@extends('admin.layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row m-2">
                <form action="{{route('news.update', $news->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <h1>Изменения новости - {{$news->title}}</h1>
                    </div>
                    <div class="form-group">
                        <label for="title">Название</label>
                        <input type="text" class="form-control" name="title" placeholder="Название"
                               value="{{$news->title}}">
                        @error('title')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <img id="result" src="{{asset('storage/'.$news->img)}}" style="max-width: 250px; max-height: 250px">
                    </div>
                    <div class="form-group">
                        <label for="imgFile">Изображение</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="imgFile" name="img" value="{{ $news->img }}">
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
                        <textarea id="summernote" name="text">{{ $news->text}}</textarea>
                        @error('text')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Обновить">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('adminlte/js/preview_img.js')}} "></script>
@endsection
