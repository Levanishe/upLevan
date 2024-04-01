@extends('layouts.app')
@section('title-block')Контакты@endsection
@section('content')
    <h1>Контакты</h1>
    <form action="{{route('contact-update-submit', $data['id'])}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Введите имя:</label>
            <input type="text" name="name" value="{{ $data['name'] }}" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" value="{{ $data['email'] }}" placeholder="Введите email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема сообщения:</label>
            <input type="text" name="subject" value="{{ $data['subject'] }}" placeholder="Введите имя" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Тема сообщения:</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Введите сообщение...">{{ $data['message'] }}</textarea>
        </div>
        <button class="btn btn-success" type="success">Отправить</button>
    </form>
@endsection