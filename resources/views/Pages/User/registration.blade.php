@extends('Layouts.User.app')
@section('content')

<div class="custom-login">
    <div class="center">

            <form action="/register" method="post">
            {{csrf_field()}}
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{old('name')}}">

                        @if($errors->has('email'))
                        <span>
                            <strong>{{$errors->first('email')}}</strong>
                        </span>
                        @endif
  
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label-sm">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Password" value="{{old('pass')}}">

                    @if($errors->has('pass'))
                        <span>
                            <strong>{{$errors->first('pass')}}</strong>
                        </span>
                    @endif

                
                </div>
            </div>

            <button type="submit" class="btn btn-primary" value="Submit">Sign Up</button>
            <!-- <input type="submit" value="Submit"> -->
            </form>
</div>
</div>


@endsection

<!-- <form action="/registration" method="post">
                            {{csrf_field()}}
                        <label for="name">Name:</label><br>
                        <input type="text" id="name" name="name" placeholder="Enter Your name" value="{{old('name')}}">
                        <br>
                        @if($errors->has('name'))
                        <span>
                            <strong>{{$errors->first('name')}}</strong>
                        </span>
                        @endif
                        <br>

                        <label for="Email">Email:</label><br>
                        <input type="text" id="email" name="email" placeholder="Enter your e-mail" value="{{old('email')}}"><br>

                        @if($errors->has('email'))
                        <span>
                            <strong>{{$errors->first('email')}}</strong>
                        </span>
                        @endif
                        <br>

                        <label for="dob">Date Of Birth:</label><br>
                        <input type="date" id="dob" name="dob" placeholder="date of birth" value="{{old('dob')}}"><br>

                        @if($errors->has('dob'))
                        <span>
                            <strong>{{$errors->first('dob')}}</strong>
                        </span>
                        @endif
                        <br>

                        <label for="password">Password:</label><br>
                        <input type="password" id="pass" name="pass" placeholder="Password" value="{{old('pass')}}"><br>

                        @if($errors->has('pass'))
                        <span>
                            <strong>{{$errors->first('pass')}}</strong>
                        </span>
                        @endif
                        <br>
                        <label for="conPass">Confirm Password:</label><br>
                        <input type="password" id="conPass" name="conPass" placeholder="Confirm Password" value="{{old('confirmPass')}}"><br>

                        @if($errors->has('confirmPass'))
                        <span>
                            <strong>{{$errors->first('confirmPass')}}</strong>
                        </span>
                        @endif
                        <br>
                        
                        <input type="submit" value="Submit">
            </form> -->