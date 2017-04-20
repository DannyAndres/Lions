@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="center-block col-md-12 col-md-offset-1">
        		<div class="panel panel-default">
        			<div class="panel-body">
	        			<img src="/uploads/avatars/{{ $user->avatar }}" class="image-profile">
	        			<h1>{{ $user->name }}</h1>
	        			<form enctype="multipart/form-data" action="/profile" method="POST">
	        			    <label>Actualiza tu foto de perfil</label>
	        			    <input type="file" name="avatar">
	        			    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	        			    <input type="submit" class="pull-right btn btn-sm btn-primary" style="margin-right:25px;" value="Cambiar">
	        			</form>
	        			<br><h2 style="margin-left:25px;">bienvenido</h2>
	        			<p style="margin-left:25px;">esta sera la parte donde encontraras tu perfil</p>
	        		</div>
        		</div>
        </div>
    </div>
</div>
@endsection
