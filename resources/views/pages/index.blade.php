
@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quae doloribus nam illum, placeat amet repudiandae beatae aspernatur quas unde nostrum voluptates ducimus velit veritatis tempore! Illo reiciendis dolor fuga.</p>
    <p>
        <a href="/login" role="button" class="btn btn-primary bg-lg">Login</a>
        <a href="/register" role="button" class="btn btn-success bg-lg">Register</a>
    </p>
</div>
@endsection