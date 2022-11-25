@extends('layouts.app')
@section('title')
    Добавить контакт
@endsection
@section('content')
    <h1>Добавить контакт</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>

                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class = "alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <form action="{{route('contact_update', $contact->id)}}" method="post">
        @csrf
        @method('patch')
        <form action="{{route('contact_store')}}" method="post">
            @csrf
            <div class="form-group mb-5">
                <label for="name">Введите имя</label>
                <input class="form-control" type="text" name="name" placeholder="Введите Ф.И.О." id="name" value="{{$contact->name}}">
            </div>
            <div class="form-group mb-5">
                <label for="company">Название компании</label>
                <input class="form-control" type="text" name="company" placeholder="Название компании" id="company" value="{{$contact->company}}">
            </div>
            <div class="form-group mb-5">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Введите email" id="email" value="{{$contact->email}}">
            </div>
            <div class="form-group mb-5">
                <label for="phone">Телефон</label>
                <input class="form-control" type="tel" name="phone" placeholder="Введите телефон" id="phone" value="{{$contact->phone}}">
            </div>
            <div class="form-group mb-5">
                <label for="massage">Коментарий</label>
                <textarea name="massage" id="massage" class="form-control" placeholder="Введите коментарий">{{$contact->name}}</textarea>
            </div>
            <div class="form-group mb-5">
                <label for="client">Наш клиент</label>
                <input type="checkbox" name="our_client" placeholder="Введите телефон" id="client">
            </div>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
        <button type="submit" class="btn btn-success">Обновить</button>
    </form>
@endsection
