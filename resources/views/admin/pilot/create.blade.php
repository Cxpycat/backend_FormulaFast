@extends('admin.layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row m-2">
                <form action="{{route('pilot.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <h1>Добавить страну</h1>
                    </div>
                    <div class="form-group">
                        <label for="title">Имя</label>
                        <input type="text" class="form-control" name="name" placeholder="Имя">
                        @error('name')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Команда</label>
                        <select class="form-control select2 select2-danger select2-hidden-accessible"
                                data-dropdown-css-class="select2-danger" style="width: 100%;" tabindex="-1"
                                aria-hidden="true" name="team_id">
                            <option value="">Команда</option>
                            @foreach($teams as $team)
                                <option value="{{$team->id}}">{{$team->title}}</option>
                            @endforeach
                        </select>
                        @error('team_id')
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
