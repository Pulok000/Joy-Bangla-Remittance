@extends('Layouts.User.app')
@section('content')


<div class="custom-login">

    <div class="center">
    <form method="POST" action="{{route('login')}}">
            {{csrf_field()}}
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            @if (Session::has('err'))
                <div class="alert alert-primary" role="alert">
                    Invalid Password!
                </div>

            @endif
        </form>
    </div>
</div>



@endsection
