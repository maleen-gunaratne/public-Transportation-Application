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
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Welcome SL Ride Admin Page</strong>
                            {{--<a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!--}}
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php
                                            echo $bus_complain_count;
                                            ?>
                                        </div>
                                        <div>Bus Complains!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="feedback">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php
                                            echo $train_complain_count;
                                            ?>
                                        </div>
                                        <div>Train Complains!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="feedback">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-bus fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php
                                            echo $bus;
                                            ?></div>
                                        <div>Bus</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-bus fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php
                                            echo $train;
                                            ?></div>
                                        <div>Train</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php
                                        echo $passenger_count;
                                        ?></div>
                                        <div>Total App Users!!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                <div class="row">
                    {{--<div class="col-lg-4">--}}
                        {{--<div class="panel panel-default">--}}
                            {{--<div class="panel-heading">--}}
                                {{--<h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>--}}
                            {{--</div>--}}
                            {{--<div class="panel-body">--}}
                                {{--<div id="morris-donut-chart"></div>--}}
                                {{--<div class="text-right">--}}
                                    {{--<a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="col-lg-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="{{url('bus-schedule')}}" class="list-group-item">
                                        <span class="badge">update</span>
                                        <i class="fa fa-fw fa-book"></i> Bus Schedule updated
                                    </a>
                                    <a href="{{url('train-schedule')}}" class="list-group-item">
                                        <span class="badge">update</span>
                                        <i class="fa fa-fw fa-book"></i> Train Schedule updated
                                    </a>
                                    <a href="{{url('feedback')}}" class="list-group-item">
                                        <span class="badge">view</span>
                                        <i class="fa fa-fw fa-bookmark"></i> User complains
                                    </a>
                                    <a href="{{url('BusRegistration')}}" class="list-group-item">
                                        <span class="badge">Insert Info</span>
                                        <i class="fa fa-fw fa-bus"></i> Bus Registration
                                    </a>
                                    <a href="{{url('TrainRegistration')}}" class="list-group-item">
                                        <span class="badge">Insert Info</span>
                                        <i class="fa fa-fw fa-bus"></i> Train Registration
                                    </a>
                                    <a href="{{url('search')}}" class="list-group-item">
                                        <span class="badge">search</span>
                                        <i class="fa fa-fw fa-user"></i> User Profiles
                                    </a>
                                    {{--<a href="{{url('#')}}" class="list-group-item">--}}
                                    <a href="{{url('#')}}" class="list-group-item">
                                        <span class="badge">Insert Info</span>
                                        <i class="fa fa-fw fa-map-marker"></i> Location Detail
                                    </a>
                                    <a href="{{url('email')}}" class="list-group-item">
                                        <span class="badge">Send</span>
                                        <i class="fa fa-fw fa-envelope"></i> Go to Admin Email
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
        </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    {{--<script src="{{url('js/jquery.js')}}"></script>--}}

    {{--<!-- Bootstrap Core JavaScript -->--}}
    {{--<script src="{{url('js/bootstrap.min.js')}}"></script>--}}

    {{--<!-- Morris Charts JavaScript -->--}}
    {{--<script src="{{url('js/plugins/morris/raphael.min.js')}}"></script>--}}
    {{--<script src="{{url('js/plugins/morris/morris.min.js')}}"></script>--}}
    {{--<script src="{{url('js/plugins/morris/morris-data.js')}}"></script>--}}

</body>


@endsection
