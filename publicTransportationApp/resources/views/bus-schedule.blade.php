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
                            Schedule
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Bus Schedule
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->




                <div class="row">
                    <div class="col-xs-12">

                        <!-- PAGE CONTENT BEGINS -->
                        <form class="form-horizontal" role="form" method="post" action="{{ route('busschedul') }}" >
                            {{--<form class="form-horizontal" role="form" method="post" action="{{ route('busschedule') }}">--}}
                            <h3>Bus Schedule Details</h3>
                            {{--<div class="form-group">--}}
                                {{--<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Route Name </label>--}}

                                {{--<div class="col-sm-9">--}}
                                    {{--<input type="text" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="routename" />--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Origin </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="origin"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Destination </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="destination"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Route Number </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="routenumber"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Bus Number </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="busnumber"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date </label>

                                <div class="col-sm-9">
                                    <input type="date" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="date"/>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Arrival Time </label>

                                <div class="col-sm-9">
                                    <input type="time" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="arrivaltime"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Departure Time </label>
                                <div class="col-sm-9">
                                    <input type="time" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="departure"/>
                                </div>
                            </div>



                            {{--<p><a href="#" class='addsection'>Add Section</a></p>--}}

                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="submit" class="btn btn-default">Submit</button>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">

                        </form>





                    </div>
                </div>
                <!-- </br></br> -->

                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-15">
                        </br>
                        <h3>Bus Schedule</h3>
                        </br>
                        <form class="form-horizontal" role="form" method="post" action="{{ route('search_code') }}">

                            <tr>
                                <td>Search by Route Number: </td>
                                <td><input type="text" name="search_code"></td>
                                <td><button type="submit" name="search" value="search">search</button></td>
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                            </tr>
                        </form>

                        {{--<div class="col-xs-2">--}}
                        <form action="{{route('bus-schedule')}}">

                            <button type="submit">All</button>

                            </br>

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">

                                    <thead>
                                    <tr>

                                        <th>Origin</th>
                                        <th>Destination</th>
                                        <th>Route Number</th>
                                        <th>Bus Number</th>
                                        <th>Date</th>
                                        <th>Arrival</th>
                                        <th>Departure</th>
                                        <th>Option</th>

                                    </tr>
                                    </thead>
                                    <?php
                                    foreach ($bus_schedule_data as $value1 )
                                    {

                                    ?>
                                    <tbody>
                                    <tr>

                                        <td><?php echo $value1->origin; ?></td>
                                        <td><?php echo $value1->destination; ?></td>
                                        <td><?php echo $value1->route_num; ?></td>
                                        <td><?php echo $value1->bus_number; ?></td>
                                        <td><?php echo $value1->date; ?></td>
                                        <td><?php echo $value1->arrival_time; ?></td>
                                        <td><?php echo $value1->departure_time; ?></td>
                                        <td>
                                        {{--<td><button><i class="ace-icon fa fa-pencil bigger-120"></i></button>--}}

                                            <button><a class="ace-icon fa fa-trash-o bigger-120" href="{{route('schedule_item.delete',['bus_schedule_id'=>$value1->bus_schedule_id])}}"></a></button>
                                        </td>

                                    </tr>

                                    </tbody>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </form>
                    </div>




                    {{--<h2>SL Ride Helping Team</h2>--}}
                    {{--<p>For more Information please visit <a target="_blank" href="http://www.SLride.com/css/#tables"> www.SLride.com/tables/trains</a> Thank you for using us as your traveling agent.</p>--}}
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    </div>
    {{--<!-- /#wrapper -->--}}




    {{--<script src="js/jquery.js"></script>--}}

    {{--<!-- Bootstrap Core JavaScript -->--}}
    {{--<script src="js/bootstrap.min.js"></script>--}}





    </body>

@endsection

