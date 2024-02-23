@extends('admin.layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Автодромы</h3>
                </div>

                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width: 10px">id</th>
                            <th>Автодром</th>
                            <th>Дата проведения</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($races as $race)
                            <tr>
                                <td>{{$race->id}}</td>
                                <td>
                                    <a href="{{route('result_race.edit', $race->id)}}">
                                        {{$race->track['title']}}
                                    </a>
                                </td>
                                <td>{{ date('d:m:Y', strtotime($race->date)) }}</td>
                                <td>
                                    <form action="{{route('race.delete', $race->id)}}" method="post">
                                        @method('delete') @csrf
                                        <button type="submit" class="border-0 bg-transparent text-danger">
                                            <i class="fas fa-trash ml-1 mr-1" role="button"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <a href="{{route('race.create')}}" class="btn btn-primary">Добавить</a>
        </div>
    </div>
@endsection
