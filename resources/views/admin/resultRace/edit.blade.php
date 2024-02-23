@extends('admin.layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row m-2">
                <form action="{{route('result_race.update')}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <h1>Результаты гран при</h1>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Позиция</th>
                                    <th>Пилот</th>
                                </tr>
                                </thead>
                                <tbody>
                                @for($i = 1; $i < 21; $i++)
                                    <tr>
                                        <th>
                                            {{$i}}
                                            <input type="hidden" name="position" value="{{$i}}">
                                            <input type="hidden" name="race_id" value="{{$race_id}}">
                                        </th>
                                        <th>
                                            <select
                                                class="form-control select2 select2-danger select2-hidden-accessible"
                                                data-dropdown-css-class="select2-danger" style="width: 100%;"
                                                tabindex="-1"
                                                aria-hidden="true" name="place_{{$i}}">
                                                <option value="">Пилот</option>
                                                @foreach($pilots as $pilot)
                                                    <option value="{{$pilot->id}}"
                                                            @if($resultRace)
                                                                @if($pilot->id == $resultRace['place_'.$i]) selected @endif
                                                        @endif
                                                    >{{$pilot->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('place_'.$i)
                                            <div class="text-danger">{{$message}}</div>
                                            @enderror
                                        </th>
                                    </tr>
                                @endfor
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body">
                            <label>Быстрый круг</label>
                            <select class="form-control select2 select2-danger select2-hidden-accessible"
                                    data-dropdown-css-class="select2-danger" style="width: 100%;" tabindex="-1"
                                    aria-hidden="true" name="fastest_lap">
                                <option value="">Быстрый круг</option>
                                @foreach($pilots as $pilot)
                                    <option value="{{$pilot->id}}"
                                            @if($resultRace)
                                                @if($pilot->id == $resultRace['fastest_lap']) selected @endif
                                        @endif
                                    >{{$pilot->name}}</option>
                                @endforeach
                            </select>
                            @error('fastest_lap')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Обновить">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
