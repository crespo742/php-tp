@extends('layout')

@section('contenu')
<div><h1>Bonjour {{ request('prenom') }}</h1></div>
@endsection

