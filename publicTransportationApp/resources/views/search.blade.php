@extends('Layouts.searchcss')
@section('content')


    <body>

    <div id="wrapper">


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Search
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-search"></i> Search Users and Vehicals
                            </li>
                        </ol>
                    </div>
                </div>
                {{--<input type="text" name="search_code" placeholder="  Search....">--}}
                <form action="search_code" method="post">
                        <input type="text" name="search_code">
                        <button type="submit" name="search">Search</button>
                </form>
                    <!-- /.row -->


                </br></br>

                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Search Details</div>


                    <!-- List group -->
                    <ul class="list-group">
                        <li class="list-group-item">gfdhgjhgjkb </li>
                        <li class="list-group-item">fuygfuyyu : </li>
                        <li class="list-group-item">uyguygd: </li>
                    </ul>
                    <div class="panel-body">
                        <p> Image </p>
                    </div>
                    <div class="panel-body">
                        <p> content</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </body>


@endsection