@extends('layouts.app')
@section('title')
    Контакты
@endsection
@section('content')
    <h1>Контакты</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Ф.И.О.</th>
            <th scope="col">Организация</th>
            <th scope="col">Email</th>
            <th scope="col">Телефон</th>
            <th scope="col">Коментарий</th>
            <th scope="col">Категория</th>
            <th scope="col">Действия</th>
{{--            <th scope="col">"Наш клиент"</th>--}}
        </tr>
        </thead>
        @foreach($contacts as $contact)
        <tbody>
        <tr>
            <td>{{$contact->name}}</td>
            <td>{{$contact->company}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->phone}}</td>
            <td>{{$contact->massage}}<td>
            <td>{{$contact->category->title}}<td>
            <td>
                <form action="{{route('contact_delete', $contact->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn" type="submit"><img style="width: 20px;" src="{{ asset('/img/delete.png') }}" alt=""></button>
                </form>
                <a href="{{route('contact_edit', $contact->id)}}" class="btn btn-success">edit</a><td>
{{--            <td><a class="table-item" href="{{route('contact_show', $contact->id)}}">{{$contact->our_client}}</a></td>--}}
        </tr>
        </tbody>
        @endforeach
    </table>
    <div>

    </div>
    <a class="btn btn-primary" type="submit" href="{{ route('contact_create') }}">
        Добавить запись
    </a>
@endsection
