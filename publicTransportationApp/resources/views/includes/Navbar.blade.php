<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{url('index')}}" >SLRide Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu message-dropdown">
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                            <div class="media-body">
                                <h5 class="media-heading"><strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                            <div class="media-body">
                                <h5 class="media-heading"><strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                            <div class="media-body">
                                <h5 class="media-heading"><strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-footer">
                    <a href="#">Read All New Messages</a>
                </li>
            </ul>
        </li>
        {{--<li class="dropdown">--}}
            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>--}}
            {{--<ul class="dropdown-menu alert-dropdown">--}}
                {{--<li>--}}
                    {{--<a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>--}}
                {{--</li>--}}
                {{--<li class="divider"></li>--}}
                {{--<li>--}}
                    {{--<a href="#">View All</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{url('AdminProfile')}}"><i class="fa fa-fw fa-envelope"></i> profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    {{--<a href="#"><i class="fa fa-fw fa-power-off"></i>Log Out</a>--}}
                    <a href="{{route('logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            {{--<li>--}}
                {{--<a href="charts"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="tables"><i class="fa fa-fw fa-table"></i> Tables</a>--}}
            {{--</li>--}}
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Registration Form <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="TrainRegistration">Train Registration Form</a>
                    </li>
                    <li>
                        <a href="BusRegistration">Bus Registration Form</a>
                    </li>
                    {{--<li>--}}
                        {{--<a href="testform2">Test Registration Form</a>--}}
                    {{--</li>--}}

                </ul>
            </li>

            {{--<li>--}}
                {{--<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Schedule <i class="fa fa-fw fa-caret-down"></i></a>--}}
                {{--<ul id="demo1" class="collapse">--}}
                    {{--<li>--}}
                        {{--<a href="bus-schedule">bus schedule</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="train-schedule">Train schedule</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            <li>
                <a href="{{url('bus-schedule')}}"><i class="fa fa-fw fa-bus"></i> Bus schedule</a>
            </li>
            <li>
                <a href="{{url('train-schedule')}}"><i class="fa fa-fw fa-bus"></i> Train schedule</a>
            </li>
            <li>
                <a href="{{url('railwaystation')}}"><i class="fa fa-fw fa-university"></i> Railway Station</a>
            </li>

            <li>
                <a href="{{url('busstoplocation')}}"><i class="fa fa-fw fa-university"></i> Bus Stop</a>
            </li>

            <li>
                <a href="{{url('feedback')}}"><i class="fa fa-fw fa-tags"></i> Feedbacks </a>
            </li>
            {{--<li>--}}
                {{--<a href="{{url('BusComplain')}}"><i class="fa fa-fw fa-tags"></i> Bus Complain </a>--}}
            {{--</li>--}}







            {{--<li>--}}
                {{--<a href="{{url('bootstrap-elements')}}"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="{{url('bootstrap-grid')}}"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>--}}
            {{--</li>--}}

            {{--<li>--}}
                {{--<a href="{{url('blank-page')}}"><i class="fa fa-fw fa-file"></i> Blank Page</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="{{url('index-rtl')}}"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>--}}
            {{--</li>--}}
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
