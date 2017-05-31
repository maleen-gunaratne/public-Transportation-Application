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
                            Passenger Feedbacks
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Feedbacks
                            </li>
                        </ol>
                    </div>
                </div>
                <input type="text" name="search" placeholder="Search..">
                <!-- /.row -->
            </div>
        </div>
    </div>
    </body>


@endsection