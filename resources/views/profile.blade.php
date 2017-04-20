@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
                <img src="/uploads/avatars/{{ $user->avatar }}" class="image-profile">
                <h1>{{ $user->name }}</h1>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <br><label>Actualiza tu foto de perfil</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <br><input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
                <h2>bienvenido</h2>
                <p>
                    esta sera la parte donde encontraras tu perfil 
                </p>
        </div>
    </div>
</div>
@endsection
