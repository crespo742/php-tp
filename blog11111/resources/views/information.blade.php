
@extends('layout')

@section('contenu')

<h1>Bienvenue dans vos informations !</h1>

<p>Bienvenue <?php echo request('prenom') ?> !</p>




<p>Bienvenu {{ request('prenom')}}</p>

<p>Bienvenu {{ $prenom}}</p>
@endsection


