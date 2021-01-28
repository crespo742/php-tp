@extends('layout')

@section('contenu')
<h1>Change your password</h1>

<form action="/password_modification" method="post">
    {{csrf_field()}}

    <input type="password" name="password" placeholder="Password">
    @if($errors->has('password'))
        <p>Password is mandatory</p>
    @endif
    <input type="password" name="password_confirmation" placeholder="Confirmation password">
    @if($errors->has('password_confirmation'))
        <p>Password confirmation is mandatory</p>
    @endif
    <input type="submit" value="Valider">

</form>

@endsection