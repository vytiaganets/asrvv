@extends('layouts.app')

@section('title-block')Оновлення запису@endsection

@section('content')
<h1>Оновлення запису</h1>

<form action="{{ route('contact-update-submit', $data->id) }}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Введіть ім'я</label>
        <input type="text" name="name" value={{$data->name}} placeholder="Введіть ім'я" id="name" class="form-control"></input>
</div>

    <div class="form-group">
        <label for="email">Введіть email</label>
        <input type="text" name="email"  value={{$data->email}} placeholder="Введіть email" id="email" class="form-control"></input>
</div>

    <div class="form-group">
        <label for="subject">Тема повідомлення</label>
        <input type="text" name="subject"  value={{$data->subject}} placeholder="Введіть тему повідомлення" id="subject" class="form-control"></input>
</div>

<div class="form-group">
        <label for="message">Повідомлення</label>
        <textarea type="message" name="message" placeholder="Введіть повідомлення" id="message" class="form-control mb-3">{{$data->message}}</textarea>
</div>

<button type="submit" class="btn btn-success">Оновити</button>

</form>

@endsection