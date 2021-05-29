@extends('layout_personal')
@section('css')
<link rel="stylesheet" href="./css/reset.css">
<link rel="stylesheet" href="./css/personal.css">
<link rel="stylesheet" href="./css/podverzhdenie.css">
@stop
@section('content')
    <table>
        <thead>
        <tr>
            <td>Имя пользователя</td>
            <td>Почта пользователя</td>
            <td>Изменить</td>
            <td>Удалить</td>
        </tr>
        </thead>
        <tbody>
        @if(count($users))
        @foreach($users as $user)
        <tr>
            <td name="name">{{$user->name}}</td>
            <td name="email">{{$user->email}}</td>
            <td><a href="{{route('updateusers')}}?id={{$user->id}}">Изменить</a></td>
            <td><a href="{{route('delete')}}?id={{$user->id}}">Удалить</a></td>
        </tr>
        </tbody>
        @endforeach
        @else
            <p>Похожего имени пользователя не найдено!</p>
        @endif
    </table>
@endsection
