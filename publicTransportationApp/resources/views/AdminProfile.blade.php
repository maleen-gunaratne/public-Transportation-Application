@extends('Layouts.master')
@section('content')



    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <h3>my Profile</h3>

            <form action="{{route('account.save')}}" method="post" enctype="multipart/form-data">


                {{--<div class="form-group">--}}
                    {{--<label for="first-name">First Name</label>--}}

                    {{--<input type="text" name="first-name" class="form-control" value=""id="first-name">--}}
                    {{----}}
                    {{--<input type="text" name="first-name" class="form-control" id="first-name">--}}
                {{--</div>--}}
                <div class="form-group">
                    <label for="image">Image(jpg)</label>
                    <input type="file" name="image" class="form-control" id="image">

                </div>
                <button type="submit" class="btn btn-primary">Save Account</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>

        </div>
    </section>
    {{--//$admin->id--}}
    @if(Storage::disk('local')->has(time(). '.jpg'))
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <img src="{{route('profile.image',['filename' => time().'.jpg'])}}" alt="imageview" class="img-responsive">
        </div>

    </section>
    @endif


@endsection