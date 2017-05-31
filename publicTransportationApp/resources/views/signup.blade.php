@extends('Layouts.master')
@section('content')

    <div class="row" >


        <div class="col-md-6">
            <h3>Sign Up</h3>

            <form  role="form" method="post" action="{{route('AdminSignUp')}}">
                <div class="form-group">
                    <label for="user_name">FirstName</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" >
                    @if ($errors->has('first_name'))
                        <span class="help-block" style="color:red">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="user_name">LastName</label>
                    <input class="form-control" type="text" name="last_name" id="last_name" >
                    @if ($errors->has('last_name'))
                        <span class="help-block" style="color:red">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input class="form-control" type="email" name="email" id="email" >
                    @if ($errors->has('email'))
                        <span class="help-block" style="color:red">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="user_name">Phone number</label>
                    <input class="form-control" type="text" name="phone_number" id="phone_number">

                    @if ($errors->has('phone_number'))
                        <span class="help-block" style="color:red">
                            <strong>{{ $errors->first('phone_number') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="user_name">UserName</label>
                    <input class="form-control" type="text" name="user_name" id="user_name">
                    @if ($errors->has('user_name'))
                    <span class="help-block" style="color:red">
                    <strong>{{ $errors->first('user_name') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" >
                    @if ($errors->has('password'))
                        <span class="help-block" style="color:red">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password">Confirm Password</label>
                    <input class="form-control" type="password" name="confirm_password" id="confirm_password">
                    @if ($errors->has('confirm_password'))
                        <span class="help-block" style="color:red">
                            <strong>{{ $errors->first('confirm_password') }}</strong>
                        </span>
                    @endif
                </div>


                <button type="submit" class="btn btn-primary">submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">


            </form>

            <a href="login">Admin Login</a>
        </div>
    </div>
    {{--<script type="text/javascript">--}}
        {{--function Validate() {--}}
            {{--var password = document.getElementById("password").value;--}}
            {{--var confirmPassword = document.getElementById("confirm_password").value;--}}
            {{--if (password != confirmPassword) {--}}
                {{--alert("Passwords do not match.");--}}
                {{--return false;--}}
            {{--}--}}
            {{--return true;--}}
        {{--}--}}
    {{--</script>--}}
@endsection
