

@if(auth()->check())
    <a href="{{url('/signout')}}">Sign out</a>

@else
    <a href="{{url('/connexion')}}">log in</a>
    <a href="{{url('/inscription')}}">Sign in</a>
@endif