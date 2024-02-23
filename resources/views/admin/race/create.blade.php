@extends('admin.layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row m-2">
                <form action="{{route('race.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <h1>Добавить результаты гран при</h1>
                    </div>
                    <div class="form-group">
                        <label for="title">Дата проведения</label>
                        <input type="date" class="form-control" name="date" placeholder="Дата проведения">
                        @error('date')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Автодром</label>
                        <select class="form-control select2 select2-danger select2-hidden-accessible"
                                data-dropdown-css-class="select2-danger" style="width: 100%;" tabindex="-1"
                                aria-hidden="true" name="track_id">
                            <option value="">Автодром</option>
                            @foreach($tracks as $track)
                                <option value="{{$track->id}}">{{$track->title}}</option>
                            @endforeach
                        </select>
                        @error('track_id')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label>Первое мероприятие</label>
                            <select class="form-control select2 select2-danger select2-hidden-accessible"
                                    data-dropdown-css-class="select2-danger" style="width: 100%;" tabindex="-1"
                                    aria-hidden="true" name="first_event">
                                <option value="Свободная практика">Свободная практика</option>
                            </select>
                        </div>
                        @error('first_event')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="title">Время перво мероприятия</label>
                        <input type="date" class="form-control" name="first_event_time">
                        @error('first_event_time')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label>Второе мероприятие</label>
                            <select class="form-control select2 select2-danger select2-hidden-accessible"
                                    data-dropdown-css-class="select2-danger" style="width: 100%;" tabindex="-1"
                                    aria-hidden="true" name="second_event">
                                <option value="Свободная практика">Свободная практика</option>
                                <option value="Квалификация">Квалификация</option>
                            </select>
                            @error('second_event')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title">Время второго мероприятия</label>
                        <input type="date" class="form-control" name="second_event_time">
                        @error('second_event_time')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label>Третье мероприятие</label>
                            <select class="form-control select2 select2-danger select2-hidden-accessible"
                                    data-dropdown-css-class="select2-danger" style="width: 100%;" tabindex="-1"
                                    aria-hidden="true" name="third_event">
                                <option value="Свободная практика">Свободная практика</option>
                                <option value="Квалификация">Спринт квалификация</option>
                            </select>
                            @error('third_event')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title">Время третьего мероприятия</label>
                        <input type="date" class="form-control" name="third_event_time">
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label>Четвертое мероприятие</label>
                            <select class="form-control select2 select2-danger select2-hidden-accessible"
                                    data-dropdown-css-class="select2-danger" style="width: 100%;" tabindex="-1"
                                    aria-hidden="true" name="fourth_event">
                                <option value="Свободная практика">Квалификация</option>
                                <option value="Квалификация">Спринт</option>
                            </select>
                            @error('fourth_event')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title">Время четвертого мероприятия</label>
                        <input type="date" class="form-control" name="fourth_event_time">
                        @error('fourth_event_time')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="title">Время гран при</label>
                        <input type="date" class="form-control" name="race_event_time">
                        @error('race_event_time')
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
