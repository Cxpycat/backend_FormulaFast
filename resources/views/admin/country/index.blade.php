@extends('admin.layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Страны</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width: 10px">id</th>
                            <th>Название</th>
                            <th>Флаг</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($countries as $country)
                            <tr>
                                <td>{{$country->id}}</td>
                                <td>
                                    <a href="{{route('country.edit',$country->id)}}">
                                        {{$country->title}}
                                    </a>
                                </td>
                                <td>
                                    <img src="{{asset('storage/'.$country->img)}}"
                                         class="img-fluid adminpanel-flag">
                                </td>
                                <td>
                                    <form action="{{route('country.delete', $country->id)}}" method="post">
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
            <a href="{{route('country.create')}}" class="btn btn-primary">Добавить</a>
        </div>
    </div>
@endsection
