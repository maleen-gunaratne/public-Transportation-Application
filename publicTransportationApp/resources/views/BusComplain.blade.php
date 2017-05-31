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
                                <i class="fa fa-edit"></i> Bus Complain
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                {{--<form action="{{route('BusComplain')}}" >--}}

                    {{--<button type="submit">Update</button>--}}
                    {{--<input type="hidden" name="_token" value="{{ Session::token() }}">--}}


                    <?php
                    foreach ($busfeedback as $value )
                    {
                    ?>

                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        {{--<div class="panel-heading">Passenger Complain</div>--}}


                        <!-- List group -->
                        <article class="option">
                            <form action="{{route('report')}}" >


                                    <input type="text" name="bus_number" value=" <?php echo $value->bus_number; ?>">




                        <div class="panel-body">
                            {{--<p> Image </p>--}}

                        {{--</div>--}}
                        {{--<div class="panel-body">--}}
                            <p>Complain content</p>
                            <p><?php echo $value->content; ?></p>
                            <p>{{$value->content}}</p>

                        </div>


                       {{--<a href="#">Edit Complain</a>--}}
                            {{--<a href="report">Report complain</a>--}}



                                <button type="submit">Report Complain</button>
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                </form>

                            </article>
                    </div>




                    {{--<div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">--}}
                        {{--<div class="modal-dialog" role="document">--}}
                            {{--<div class="modal-content">--}}
                                {{--<div class="modal-header">--}}
                                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                                    {{--<h4 class="modal-title">Modal title</h4>--}}
                                {{--</div>--}}
                                {{--<div class="modal-body">--}}
                                    {{--<p>One fine body&hellip;</p>--}}
                                {{--</div>--}}
                                {{--<div class="modal-footer">--}}
                                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                                {{--</div>--}}
                            {{--</div><!-- /.modal-content -->--}}
                        {{--</div><!-- /.modal-dialog -->--}}
                    {{--</div><!-- /.modal -->--}}




                    <?php
                    }
                    ?>
                {{--</form>--}}





            </div>
        </div>
    </div>
    </body>

    {{--<script>--}}
        {{--var token = '{{ Session::token() }}';--}}
        {{--var urlEdit = '{{ route('edit') }}';--}}

    {{--</script>--}}
            <!-- jQuery -->
    {{--<script src="js/jquery.js"></script>--}}

    {{--<!-- Bootstrap Core JavaScript -->--}}
    {{--<script src="js/bootstrap.min.js"></script>--}}

    {{--<!-- Morris Charts JavaScript -->--}}
    {{--<script src="js/plugins/morris/raphael.min.js"></script>--}}
    {{--<script src="js/plugins/morris/morris.min.js"></script>--}}
    {{--<script src="js/plugins/morris/morris-data.js"></script>--}}
    {{--<script src="js/app2.js"></script>--}}



@endsection