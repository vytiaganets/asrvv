@extends('layouts.app')

@section('title-block')Cторінка контактів@endsection

@section('content')
<h1>Cторінка контактів</h1>

@if($errors->any())
<div class="alert alert-danger">
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif

<form action="{{ route('contact-form') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Введіть ім'я</label>
        <input type="text" name="name" placeholder="Введіть ім'я" id="name" class="form-control"></input>
</div>

    <div class="form-group">
        <label for="email">Введіть email</label>
        <input type="text" name="email" placeholder="Введіть email" id="email" class="form-control"></input>
</div>

    <div class="form-group">
        <label for="subject">Тема повідомлення</label>
        <input type="text" name="subject" placeholder="Введіть тему повідомлення" id="subject" class="form-control"></input>
</div>

<div class="form-group">
        <label for="message">Повідомлення</label>
        <textarea type="message" name="message" placeholder="Введіть повідомлення" id="message" class="form-control mb-3"></textarea>
</div>

<button type="submit" class="btn btn-success">Відправити</button>
</form>

@endsection