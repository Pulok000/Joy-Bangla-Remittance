@extends('Layouts.User.app')
@section('content')


<div class="custom-login">

    <div class="center">


    <form action="/adduser" method="post">
            {{csrf_field()}}

            <!-- Name: -->
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-3 col-form-label col-form-label-sm">Full Name:  </label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="name" placeholder="name" value="{{old('name')}}">


  
                </div>
            </div>


            <!-- DOB: -->
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-4 col-form-label col-form-label-sm">Date of Birth:  </label>
                <div class="col-sm-10">
                    <input type="date" name="dob" class="form-control" id="dob" placeholder="dob" value="{{old('dob')}}">


  
                </div>
            </div>
            <!-- END -->


            <!-- Email: -->
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-3 col-form-label col-form-label-sm">Email:  </label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{old('email')}}">


  
                </div>
            </div>
            <!-- END -->

            <!-- Password: -->
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-5 col-form-label col-form-label-sm">Password:  </label>
                <div class="col-sm-10">
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Password" value="{{old('pass')}}">



                
                </div>
            </div>
            <!-- End -->

            <!-- Confirm Password: -->
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-3 col-form-label col-form-label-sm">Confirm Password:  </label>
                <div class="col-sm-10">
                    <input type="password" name="cPass" class="form-control" id="cPass" placeholder="Password" value="{{old('cPass')}}">



                
                </div>
            </div>
            <!-- End -->

            <button type="submit" class="btn btn-primary" value="Submit">Sign Up</button>
            <!-- <input type="submit" value="Submit"> -->
            </form>


    </div>
</div>



@endsection