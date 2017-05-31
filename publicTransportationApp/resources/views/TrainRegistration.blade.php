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
                            <i class="fa fa-edit"></i> Train Registration Forms
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->




            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <form class="form-horizontal" role="form" method="post" action="{{ route('Tsubmit') }}">
                        <h3>Train Details</h3>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Train Name </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="name" class="col-xs-10 col-sm-5" name="trainname" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Train No </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="Train No" class="col-xs-10 col-sm-5" name="trainno"/>
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


                                {{--<input type="text" id="form-field-1" placeholder="slow,Express" class="col-xs-10 col-sm-5" name="speedtype"/>--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> GPS Module ID </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="ID" class="col-xs-10 col-sm-5" name="gps"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Total receivable seat </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="Location" class="col-xs-10 col-sm-5" name="receivable_seat" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> available date </label>
                            <div class="col-sm-9">

                        <select name="days">
                            <option value="week"> week </option>
                            <option value="weekend"> weekEnd </option>
                        </select>
                        </div>
                            </div>

                            {{--<div class="col-sm-9">--}}
                                {{--<input type="text" id="form-field-1" placeholder="Location" class="col-xs-10 col-sm-5" name="destination"/>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Seat Plane ID </label>--}}

                            {{--<div class="col-sm-9">--}}
                                {{--<input type="text" id="form-field-1" placeholder="ID" class="col-xs-10 col-sm-5" name="seatplaneid"/>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Number of Seats </label>
                        </div>
                        <div class="form-group">

                            {{--<label class="col-sm-3 control-label no-padding-right" for="form-field-1">1st class</label>--}}
                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="1st class"  name="class_name_1"/>

                                <input type="number" id="myNumber" placeholder="num of seat" name="nu_of_seat_1" />
                                <script>
                                function myFunction() {
                                    var x = document.getElementById("myNumber").value;
                                    document.getElementById("demo").innerHTML = x;
                                }
                                </script>
                                <input type="text" id="form-field-1" placeholder="Seat plan ID"  name="seatplaneid_1"/>

                                <select name="condition_1">
                                    <option value="AC">AC</option>
                                    <option value="Non-AC">Non-AC</option>
                                </select>
                                <select name="category_1">
                                    <option value="Berth">Berth</option>
                                    <option value="Observation">Observation</option>
                                    <option value="Sleperate">Sleperate</option>
                                    <option value="Normal">Normal</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            {{--<label class="col-sm-3 control-label no-padding-right" for="form-field-1">2nd class</label>--}}
                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="2nd class"  name="class_name_2"/>
                                <input type="number" id="myNumber" placeholder="num of seat" name="nu_of_seat_2"/>
                                <script>
                                    function myFunction() {
                                        var x = document.getElementById("myNumber").value;
                                        document.getElementById("demo").innerHTML = x;
                                    }
                                </script>
                                <input type="text" id="form-field-1" placeholder="Seat plan ID"  name="seatplaneid_2"/>
                                <select name="condition_2">
                                    <option value="AC">AC</option>
                                    <option value="Non-AC">Non-AC</option>
                                </select>
                                <select name="category_2">
                                    {{--<option value="Berth">Berth</option>--}}
                                    <option value="Observation">Observation</option>
                                    <option value="Sleperate">Sleperate</option>
                                    <option value="Normal">Normal</option>
                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            {{--<label class="col-sm-3 control-label no-padding-right" for="form-field-1">3rd class</label>--}}
                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="3rd class"  name="class_name_3"/>
                                <input type="number" id="myNumber" placeholder="num of seat" name="nu_of_seat_3"/>
                                <script>
                                    function myFunction() {
                                        var x = document.getElementById("myNumber").value;
                                        document.getElementById("demo").innerHTML = x;
                                    }
                                </script>
                                <input type="text" id="form-field-1" placeholder="Seat plan ID"  name="seatplaneid_3"/>
                            </div>
                        </div>
                    <h3>Staff Members</h3>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="Name" class="col-xs-10 col-sm-5" name="stfname"/>
                            </div>
                        </div>

                        <div class="form-group">

                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date of Birth</label>

                            <div class="col-sm-9">
                                <input type="date" id="form-field-1" placeholder="DOB" class="col-xs-10 col-sm-5" name="stfdob"/>
                            </div>
                        </div>
                        <div class="form-group">

                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NIC Number</label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="NIC" class="col-xs-10 col-sm-5" name="nicn"/>
                            </div>
                        </div>
                        <div class="form-group">

                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Designation</label>

                            <div class="col-sm-9">
                                {{--<input type="text" id="form-field-1" placeholder="Post" class="col-xs-10 col-sm-5" name="designation"/>--}}
                                <select id="form-field-1" class="col-xs-10 col-sm-5" name="designation">
                                    <option value="Driver">Driver</option>
                                    {{--<option value="Conductor">Conductor</option>--}}
                                    <option value="Guard">Guard</option>
                                </select>

                            </div>
                        </div>
                        <div class="form-group">

                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Licensce Number</label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="Number" class="col-xs-10 col-sm-5" name="licennu"/>
                            </div>
                        </div>

                        <div class="col-sm-9">
                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="submit" class="btn btn-default">Submit</button>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                        </div>
                    </form>
                </div>




            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
{{--<script src="js/jquery.js"></script>--}}

{{--<!-- Bootstrap Core JavaScript -->--}}
{{--<script src="js/bootstrap.min.js"></script>--}}


</body>

@endsection
