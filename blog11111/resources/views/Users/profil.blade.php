@extends('layout')

@section('contenu')
    <div class="d-flex justify-content-around">
        <div class="d-flex">
            <h1 class="mr-3">{{$user->name}}</h1>
            @auth
                <form action="{{$user->email}}/follow" method="post">
                    {{csrf_field() }}
                    {{-- @if()
                    @else --}}
                        @if(auth()->user()->follows($user))
                            {{ method_field('delete') }}
                            <button type="submit" class="btn btn-dark">Unfollow</button>
                        @else
                            <button type="submit" class="btn btn-success">Follow</button>
                        @endif
                    {{-- @endif --}}
                </form>
            @endauth
            </div>
        <p>{{$user->followers->count()}} followers</p>
        <p>{{$user->followings->count()}} followings</p>
    </div>
    


    <h3>{{$user->email}}</h3>

    

    <ul>
        @foreach($posts as $post)
            <li>
                <span>{{$post->created_at}}</span>
                <h4>{{$post->title}}</h4>
                <p>{{$post->content}}</p>
            </li>
        @endforeach
    </ul>
@endsection