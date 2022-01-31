@extends('layouts.app')

@section('title-block')Головна сторінка@endsection

@section('content')
<h1>Головна сторінка</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, a! Nobis consequatur voluptate officiis reprehenderit culpa, doloremque natus. Sunt eveniet laudantium aut obcaecati maxime excepturi! Impedit voluptatibus qui ab ad.</p>
@endsection

@section('aside')
    @parent
    <p>Додатковий текст</p>
@endsection