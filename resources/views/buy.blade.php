@extends('layout_buy')
@section('content')
    <table>
        <thead>
        <tr>
            <td>Номер заказа</td>
            <td>Имя пользователя</td>
            <td>Название мотоцикла</td>
            <td>Количество</td>
            <td>Сумма заказа</td>
            <td>Изменить</td>
            <td>Удалить</td>
        </tr>
        </thead>
        <tbody>
        @if(count($buys))
            @foreach($buys as $buy)
                <tr>
                    <td name="name">{{$buy->id}}</td>
                    <td name="email">{{$buy->name}}</td>
                    <td>{{$buy->namemoto}}</td>
                    <td>{{$buy->quantity}}</td>
                    <td>{{$buy->pricee}}</td>
                    <td><a href="{{route('updatebuys')}}?id={{$buy->id}}">Изменить</a></td>
                    <td><a href="{{route('deleteb')}}?id={{$buy->id}}&lengthh={{$buy->quantity}}&motoid={{$buy->motoo_id}}">Удалить</a></td>
                </tr>
        </tbody>
        @endforeach
        @else
            <p>Похожего имени пользователя не найдено!</p>
        @endif
    </table>
@stop
