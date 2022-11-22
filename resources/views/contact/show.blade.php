@extends('layouts.app')
@section('title')
    Контакты
@endsection
@section('content')
    <div>{{$contact->id}}. {{$contact->name}}. {{$contact->email}}. {{$contact->subject}}. {{$contact->massage}}</div>
    <a href="{{route('contact')}}">назад</a>
    <a href="{{route('contact_edit', $contact->id)}}">изменить</a>
    <div>
        <form action="{{route('contact_delete', $contact->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Удалить</button>
        </form>
    </div>
@endsection
