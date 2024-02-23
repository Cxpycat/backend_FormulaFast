@extends('admin.layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row m-2">
                <form action="{{route('track.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <h1>Добавить автодром</h1>
                    </div>
                    <div class="form-group">
                        <label for="title">Название</label>
                        <input type="text" class="form-control" name="title" placeholder="Название">
                        @error('title')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Страна</label>
                        <select class="form-control select2 select2-danger select2-hidden-accessible"
                                data-dropdown-css-class="select2-danger" style="width: 100%;" tabindex="-1"
                                aria-hidden="true" name="country_id">
                            <option value="">Страна</option>
                            @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->title}}</option>
                            @endforeach
                        </select>
                        @error('country_id')
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
@endsection
