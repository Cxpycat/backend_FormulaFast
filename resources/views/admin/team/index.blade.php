@extends('admin.layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Команды</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width: 10px">id</th>
                            <th>Название</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teams as $team)
                            <tr>
                                <td>{{$team->id}}</td>
                                <td><a href="{{route('team.edit',$team->id)}}">
                                        {{$team->title}}   </a>
                                </td>
                                <td>
                                    <form action="{{route('team.delete', $team->id)}}" method="post">
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
            <a href="{{route('team.create')}}" class="btn btn-primary">Добавить</a>
        </div>
    </div>
@endsection
