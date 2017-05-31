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

                <!-- /.row -->


                    {{--<button type="submit">Update</button>--}}
                    {{--<input type="hidden" name="_token" value="{{ Session::token() }}">--}}



                    <?php
                    foreach ($feedback as $value )
                    {
                    ?>

                    <form method="get" action="{{route('report')}}" >
                        <input hidden="bus_id" value="value.bus_id"/>



                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Passenger Complain</div>


                    <!-- List group -->

                    {{--<ul class="list-group">--}}
                    <input hidden="bus_number" name="bus_number" value=" <?php echo $value->bus_number; ?>">
                    <input hidden="bus_number" name="bus_id" value=" <?php echo $value->bus_id; ?>">
                    {{--</ul>--}}
                    <div class="panel-body">
                        <p>Vehicle Number</p>
                    <p><?php echo $value->bus_number; ?></p>


                     </div>
                    <div class="panel-body">

                        <p> Image </p>

                            <?php echo base64_decode($value->image_url); ?>
                    </div>
                    <div class="panel-body">
                        <p>Complain content</p>
                        <p><?php echo $value->content; ?></p>



                    <button><a href="{{route('complain.delete',['id'=>$value->id])}}">Delete</a></button>

                    <button type="submit">view Complain</button>

                </div>
                </div>

                    </form>
                <?php
                }
                ?>

            </div>




            </div>
        </div>

    </body>


@endsection