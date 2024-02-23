@extends('admin.layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Новости</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width: 10px">id</th>
                            <th>Название</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>
                                    <a href="{{route('news.edit',$item->id)}}">
                                        {{$item->title}}
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('news.delete', $item->id)}}" method="post">
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
            <a href="{{route('news.create')}}" class="btn btn-primary">Добавить</a>
        </div>
    </div>
@endsection
