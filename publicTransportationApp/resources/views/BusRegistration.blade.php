@extends('Layouts.app')
@section('content')

<body>

<div id="wrapper">


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Registration Form
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> Bus Registration Forms
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->




            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <form class="form-horizontal" role="form" method="post" action="{{ route('bsubmit') }}">
                        <h3>Bus Details</h3>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Bus Name </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="name" class="col-xs-10 col-sm-5" name="busname" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Bus No </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="bus No" class="col-xs-10 col-sm-5" name="busno"/>
                                {{--@if ($errors->has('busno'))--}}
                                    {{--<span class="help-block">--}}
                    {{--<strong>{{ $errors->first('busno') }}</strong>--}}
                    {{--</span>--}}
                                {{--@endif--}}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Route Name </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="Route Name" class="col-xs-10 col-sm-5" name="routename"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Speed type </label>

                            <div class="col-sm-9">
                                <select id="form-field-1" class="col-xs-10 col-sm-5" name="speedtype">
                                    <option value="slow">Slow</option>
                                    <option value="Express">Express</option>
                                </select>
                        </div>
                            </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Condition type </label>
                            <div class="col-sm-9">
                                <select id="form-field-1" class="col-xs-10 col-sm-5" name="condition">
                                    <option value="AC">AC</option>
                                    <option value="Non-AC">Non-AC</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Insurance No </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="insurance"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> GPS Module ID </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="ID" class="col-xs-10 col-sm-5" name="gps"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Seat Plane ID </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="ID" class="col-xs-10 col-sm-5" name="seatplaneid"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Number of Seats </label>
                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="# Seats" class="col-xs-10 col-sm-5" name="seat"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> No of Reseavable Seat </label>
                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="reseavable"/>
                            </div>
                        </div>
                        {{--<button type="submit" class="btn btn-default">Submit</button>--}}


                        <h3>Owner Details</h3>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name</label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="name" class="col-xs-10 col-sm-5" name="Name"/>
                            </div>
                        </div>
                        <div class="form-group">

                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Phone Number</label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="+94..." class="col-xs-10 col-sm-5" name="No"/>
                            </div>
                        </div>
                        <div class="form-group">

                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NIC Number </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="NIC Number" class="col-xs-10 col-sm-5" name="Nicnu"/>
                            </div>
                        </div>
                        <div class="form-group">

                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email address</label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="Email Address" class="col-xs-10 col-sm-5" name="Email"/>
                            </div>
                        </div>
                        <div class="form-group">

                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Permit Number</label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="permit Number" class="col-xs-10 col-sm-5" name="permit"/>
                            </div>
                        </div>

                        <div class="form-group">

                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Owner ID </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="Ownerid" class="col-xs-10 col-sm-5" name="Ownid"/>
                            </div>
                        </div>

                        <div class="form-group">

                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">password</label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="password" class="col-xs-10 col-sm-5" name="password"/>
                            </div>
                        </div>


                        {{--<div class="form-group">--}}

                            {{--<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password </label>--}}

                            {{--<div class="col-sm-9">--}}
                                {{--<input type="password" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name="pw"/>--}}
                            {{--</div>--}}
                        {{--</div>--}}



                    {{--<h3>Staff Members</h3>--}}
                        {{--<div id="sections">--}}
                            {{--<div class="section">--}}
                                {{--<fieldset>--}}
                                    <legend>Staff Members</legend>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="Name" class="col-xs-10 col-sm-5" name="stfname"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">NIC nu </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="stfnic"/>
                            </div>
                        </div>
                        <div class="form-group">

                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date of Birth</label>

                            <div class="col-sm-9">
                                <input type="date" id="form-field-1" placeholder="DOB" class="col-xs-10 col-sm-5" name="stfdob"/>
                            </div>
                        </div>
                        <div class="form-group">

                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Designation</label>

                            <div class="col-sm-9">
                                <select id="form-field-1" class="col-xs-10 col-sm-5" name="designation">
                                    <option value="Driver">Driver</option>
                                    <option value="Conductor">Conductor</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">

                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Licensce Number</label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="Number" class="col-xs-10 col-sm-5" name="licennu"/>
                            </div>
                        </div>
                        {{--<div class="form-group">--}}

                            {{--<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Staff ID</label>--}}

                            {{--<div class="col-sm-9">--}}
                                {{--<input type="text" id="form-field-1" placeholder="ID" class="col-xs-10 col-sm-5" name="stfid"/>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                                    {{--<p><a href="#" class='remove'>Remove Section</a></p>--}}
                                {{--</fieldset>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<p><a href="#" class='addsection'>Add Section</a></p>--}}

                        <button type="reset" class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-default">Submit</button>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">

                    </form>





                </div>
            </div>
            <!-- </br></br> -->

            <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        {{--<!-- /#wrapper -->--}}

        {{--<!-- jQuery -->--}}
{{--@push('scripts')--}}
        {{--{!! Html::script('js/plugins/app1.js') !!}}--}}
        {{--{!! Html::script('js/jquery.js') !!}}--}}
        {{--{!! Html::script('js/bootstrap.min.js') !!}}--}}
{{--@endpush--}}
        {{--<script src="{!! asset('js/app1.js') !!}"></script>--}}
        {{--<script src="{!! asset('js/jquery.js') !!}"></script>--}}

        {{--<!-- Bootstrap Core JavaScript -->--}}
        {{--<script src="{!! asset('js/bootstrap.min.js') !!}}"></script>--}}
{{--<script type="text/javascript" src="{!! asset('js/app.min.js') !!}"></script>--}}


{{--<script src="js/jquery.js"></script>--}}

{{--<!-- Bootstrap Core JavaScript -->--}}
{{--<script src="js/bootstrap.min.js"></script>--}}





</body>

@endsection

