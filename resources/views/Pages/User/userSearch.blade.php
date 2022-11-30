@extends('Layouts.User.app')
@section('content')



<div class="custom-login">
    <div class="center">


        <h1> {{ $uname }} </h1>

        <br>
        <br>
        Email: {{ $uemail }}
        <br>
        <br>
        Date Of Birth: {{ $udob }}
        <br>
        <br>

        <ul class="nav justify-content-end">
        <li class="nav-item">
        <button type="button" class="btn btn-light"><a style="font-size: 20px" class="nav-link" href="">Send Money</a>
        </li>
        <li class="nav-item">
        <button type="button" class="btn btn-light"><a style="font-size: 20px" class="nav-link" href="">Message</a>
        </li></button> 
        </ul>

    </div>
</div>





@endsection