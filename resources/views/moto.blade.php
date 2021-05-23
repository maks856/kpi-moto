@extends('layout_moto')
@section('content')
    <table>
        <thead>
        <tr>
            <td>Название мотоцикла</td>
            <td>Количество в наличии</td>
            <td>Цена за штуку</td>
            <td>Изменить</td>
            <td>Удалить одну штуку</td>
        </tr>
        </thead>
        <tbody>
        @if(count($motoos))
            @foreach($motoos as $moto)
                <tr>
                    <td>{{$moto->namemoto}}</td>
                    <td>{{$moto->length}}</td>
                    <td>{{$moto->price}}</td>
                    <td><a href="{{route('updatemotos')}}?id={{$moto->id}}">Изменить</a></td>
                    <td><a href="{{route('deletem')}}?id={{$moto->id}}">Удалить</a></td>
                </tr>
        </tbody>
        @endforeach
        @else
            <p>Нет такого</p>
        @endif
    </table>
@stop
