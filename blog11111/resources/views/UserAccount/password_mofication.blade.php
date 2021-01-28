@extends('layout')

@section('contenu')
    <h1>Change your password</h1>
    <form action="/inscription" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="InputPassword">New password</label>
        <input type="password" name="password" class="form-control" id="InputPassword" aria-describedby="passwordHelp">
        @if($errors->has('password'))
            <small id="nameHelp" class=""></small>
    </div>

@endsection