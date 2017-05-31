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
                                <i class="fa fa-edit"></i> Train Schedule
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->




                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <form class="form-horizontal" role="form" method="post" action="{{ route('tschedul') }}">
                            {{--<form class="form-horizontal" role="form" method="post" action="{{ route('busschedule') }}">--}}
                            <h3>Train Schedule Details</h3>
                            {{--<div class="form-group">--}}
                                {{--<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Route Name </label>--}}

                                {{--<div class="col-sm-9">--}}
                                    {{--<input type="text" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="troutename" />--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Origin </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="torigin"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Destination </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="tdestination"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Route Number </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="troutenumber"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Train Name </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="trainname"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date </label>

                                <div class="col-sm-9">
                                    <input type="date" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="date"/>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Arival Time </label>

                                <div class="col-sm-9">
                                    <input type="time" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="tarrivaltime"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Departure Time </label>
                                <div class="col-sm-9">
                                    <input type="time" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="tdeparture"/>
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
                        <h3>Train Schedule</h3>
                        </br>

                        <form class="form-horizontal" role="form" method="post" action="{{ route('search_code1') }}">

                            <tr>
                                <td>Search by Route Number: </td>
                                <td><input type="text" name="search_code1"></td>
                                <td><button type="submit" name="search" value="search">search</button></td>
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                            </tr>
                        </form>





                        <form action="{{route('train-schedule')}}" >
                            {{--<div class="col-xs-2">--}}
                            <button type="submit">All</button>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                            </br>


                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">

                                    <thead>
                                    <tr>
                                        <th>Origin</th>
                                        <th>Destination</th>
                                        <th>Route Number</th>
                                        <th>Date</th>
                                        <th>Train Name</th>
                                        <th>Arrival</th>
                                        <th>Departure</th>
                                        <th>Option</th>
                                    </tr>

                                    </thead>
                                    <?php
                                    foreach ($schedule_data as $value )
                                    {
                                    ?>
                                    <tbody>
                                    <tr>
                                        <td><?php echo $value->origin; ?></td>
                                        <td><?php echo $value->destination; ?></td>
                                        <td><?php echo $value->route_num; ?></td>
                                        <td><?php echo $value->date; ?></td>
                                        <td><?php echo $value->train_name; ?></td>
                                        <td><?php echo $value->arrival_time; ?></td>
                                        <td><?php echo $value->departure_time; ?></td>
                                        <td><button><i class="ace-icon fa fa-pencil bigger-120"></i></button>
                                            {{--<button><i class="ace-icon fa fa-trash-o bigger-120"></i></button>--}}
                                            <button><a class="ace-icon fa fa-trash-o bigger-120" href="{{route('tschedule_item.delete',['train_schedule_id'=>$value->t_schedule_id])}}"></a></button>
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

