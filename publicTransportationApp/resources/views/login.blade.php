@extends('Layouts.master')
@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">
    <div class="row" >
        <div class="col-md-6">
            <h3>Sign in</h3>
            <form action="{{route('postSignIn')}}" method="post" >
                <div class="form-group">
                    <label for="user_name">UserName</label>
                    <input class="form-control" type="text" name="username" id="user_name">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>




            <a href="signup">Create Account</a>
        </div>
    </div>


        </div>
    </div>

@endsection
