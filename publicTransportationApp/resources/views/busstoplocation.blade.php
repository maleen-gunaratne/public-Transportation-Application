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
                            Bus Stop
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Bus Stop
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->




                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->

                            <form class="form-horizontal" role="form" method="post" action="{{ route('stopsubmit') }}">
                            <h3>Bus Stop Details</h3>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Location Name </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="bholtname" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Route Number </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="broutenumber"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Longitude </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="longitude"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Latitude </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder=" " class="col-xs-10 col-sm-5" name="latitude"/>
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
                        <form action="{{route('busstoplocation')}}" >
                            {{--<div class="col-xs-2">--}}
                            <button type="submit">Update</button>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                            </br>


                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">

                                    <thead>
                                    <tr>
                                        <th>Location Name</th>
                                        <th>Route Number</th>
                                        <th>Longitude</th>
                                        <th>latitude</th>

                                        <th>Option</th>

                                    </tr>

                                    </thead>
                                    <?php
                                    foreach ($busstop as $value )
                                    {
                                    ?>
                                    <tbody>
                                    <tr>
                                        <td><?php echo $value->locationname; ?></td>
                                        <td><?php echo $value->route_num; ?></td>
                                        <td><?php echo $value->longitude; ?></td>
                                        <td><?php echo $value->latitude; ?></td>

                                        <td>
                                            <button><a class="ace-icon fa fa-trash-o bigger-120" href="{{route('busstop_item.delete',['bus_stop_id'=>$value->bus_stop_id])}}"></a></button>
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





                  {{--</div>--}}
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