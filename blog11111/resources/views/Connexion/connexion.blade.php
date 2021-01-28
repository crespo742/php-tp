@extends('layout')

@section('contenu')

    <form action="/connexion" method="post" class="mt-3 mb_3">
    {{csrf_field()}}

        <div class="form-group">
            <label for="exampleInputEmail">E-mail</label>
            <input type="email" name="email" value{{old('email')}} class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
            @if($errors->has('email'))
                <p>{{$errors->first('email')}}</p>
            @endif
            
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" label="password">
            @if($errors->has('password'))
                <p>{{$errors->first('password')}}</p>
            @endif 
        </div>
        <button type="submit" class="btn btn-primary"> Submit </button>
    </form>
@endsection

