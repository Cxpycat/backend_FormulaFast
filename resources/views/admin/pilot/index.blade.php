@extends('admin.layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Пилоты</h3>
                </div>

                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width: 10px">id</th>
                            <th>Имя</th>
                            <th>Команда</th>
                            <th>Страна</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pilots as $pilot)
                            <tr>
                                <td>{{$pilot->id}}</td>
                                <td>
                                    <a href="{{route('pilot.edit',$pilot->id)}}">
                                        {{$pilot->name}}
                                    </a>
                                </td>
                                <td>{{$pilot->team['title']}}</td>
                                <td>
                                    <img src="{{ asset('storage/'.$pilot->country['img'])}}" class="img-fluid adminpanel-flag">
                                </td>
                                <td>
                                    <form action="{{route('pilot.delete', $pilot->id)}}" method="post">
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
            <a href="{{route('pilot.create')}}" class="btn btn-primary">Добавить</a>
        </div>
    </div>
@endsection
