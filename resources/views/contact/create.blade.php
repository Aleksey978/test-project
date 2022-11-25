@extends('layouts.app')
@extends('inc.massages')
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
    @yield('errors')
    <form action="{{route('contact_store')}}" method="post">
        @csrf
        <div class="form-group mb-5">
            <label for="name">Введите имя</label>
            <input class="form-control" type="text" name="name" placeholder="Введите Ф.И.О." id="name">
        </div>
        <div class="form-group mb-5">
            <label for="company">Название компании</label>
            <input class="form-control" type="text" name="company" placeholder="Название компании" id="company">
        </div>
        <div class="form-group mb-5">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" placeholder="Введите email" id="email">
        </div>
        <div class="form-group mb-5">
            <label for="phone">Телефон</label>
            <input class="form-control" type="tel" name="phone" placeholder="Введите телефон" id="phone">
        </div>
        <div class="form-group mb-5">
            <label for="massage">Коментарий</label>
            <textarea name="massage" id="massage" class="form-control" placeholder="Введите коментарий"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection
