@extends('Layouts.User.app')
@section('content')

<div class="custom-login">
    <div class="center">

        <h1> USER PROFILE </h1>

            <br>
            Name : {{ $uname }}
            <br>
            <br>
            Email: {{ $uemail }}
            <br>
            <br>
            Date Of Birth: {{ $udob }}
            <br>
            <br>
            Password: {{ $upass }}
            <br>
            <br>

            <ul class="nav justify-content-end">
            <li class="nav-item">
            <button type="button" class="btn btn-light"><a style="font-size: 20px" class="nav-link" href="{{route('editProfile')}}">Edit</a>
            </li></button> 
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <li class="nav-item">
            <button type="button" class="btn btn-light"><a style="font-size: 20px" class="nav-link" href="/deleteprofile">delete</a>
            </li></button> 
            </ul>

 

        <ul class="nav justify-content-end">
        <li class="nav-item">
        <button type="button" class="btn btn-light"><a style="font-size: 20px" class="nav-link" href="{{route('profileView')}}">Profile</a>
        </li>
        <li class="nav-item">
        <button type="button" class="btn btn-light"><a style="font-size: 20px" class="nav-link" href="/deleteprofile">delete</a>
        </li></button> 
        </ul>
            
            

    </div>
    </div>




@endsection