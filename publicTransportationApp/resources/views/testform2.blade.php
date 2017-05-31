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
                                <i class="fa fa-edit"></i> Test Registration Forms
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->




                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <form class="form-horizontal" role="form" method="post" action="{{ route('tsubmit') }}">
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
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> speed type </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder="Slow,Express" class="col-xs-10 col-sm-5" name="speedtype"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> condition type </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder="AC,Non-AC" class="col-xs-10 col-sm-5" name="conditiontype" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> GPS Module ID </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder="ID" class="col-xs-10 col-sm-5" name="gps"/>
                                </div>
                            </div>
                            <!--<div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Origin </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder="Location" class="col-xs-10 col-sm-5" name="origin" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Destination </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder="Location" class="col-xs-10 col-sm-5" name="destination"/>
                                </div>
                            </div>-->
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Seat Plane ID </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder="ID" class="col-xs-10 col-sm-5" name="seatplaneid"/>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Number of Seats </label>
                                 <div class="col-lg-9">
                                     <div><input type="text" id="seat-details" placeholder="1st class" /></div>
                                     <div><input type="text" id="seat-details" placeholder="2nd Class" /></div>
                                     <div><input type="text" id="seat-details" placeholder="3rd class" /></div>
                                 </div>
                             </div>
                            -->
                         {{--</form>--}}
                         {{--<form class="form-horizontal" role="form" method="post" >--}}
                             {{--action="{{ route('tsubmit') }}"--}}
                             <h3>Owner Details</h3>

                             <div class="form-group">
                                 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name</label>

                                 <div class="col-sm-9">
                                     <input type="text" id="form-field-1" placeholder="Name" class="col-xs-10 col-sm-5" name="Name"/>
                                 </div>
                             </div>
                             <div class="form-group">

                                 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Phone Number</label>

                                 <div class="col-sm-9">
                                     <input type="text" id="form-field-1" placeholder="+94..." class="col-xs-10 col-sm-5" name="No"/>
                                 </div>
                             </div>
                             <div class="form-group">

                                 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email address</label>

                                 <div class="col-sm-9">
                                     <input type="text" id="form-field-1" placeholder="Email" class="col-xs-10 col-sm-5" name="Email"/>
                                 </div>
                             </div>
                             <div class="form-group">

                                 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Permit Number</label>

                                 <div class="col-sm-9">
                                     <input type="text" id="form-field-1" placeholder="permit Number" class="col-xs-10 col-sm-5" name="permit"/>
                                 </div>
                             </div>
                             <div class="form-group">

                                 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Owner ID</label>

                                 <div class="col-sm-9">
                                     <input type="text" id="form-field-1" placeholder="ID" class="col-xs-10 col-sm-5" name="Ownid"/>
                                 </div>
                             </div>
                             <!--<button type="submit" class="btn btn-default">Submit Button</button>
                             <button type="reset" class="btn btn-default">Reset Button</button>-->
                             {{--<button type="submit" class="btn btn-default">Submit</button>--}}
                             <button type="submit" class="btn btn-default">Submit</button>
                             <input type="hidden" name="_token" value="{{ Session::token() }}">

                        </form>
                        <h3>Staff Members</h3>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder="Name" class="col-xs-10 col-sm-5" name="Name"/>
                                </div>
                            </div>
                            <div class="form-group">

                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date of Birth</label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder="DOB" class="col-xs-10 col-sm-5" name="Name"/>
                                </div>
                            </div>
                            <div class="form-group">

                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Designation</label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder="Post" class="col-xs-10 col-sm-5" name="Name"/>
                                </div>
                            </div>
                            <div class="form-group">

                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Licensce Number</label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder="Number" class="col-xs-10 col-sm-5" name="Name"/>
                                </div>
                            </div>
                            <div class="form-group">

                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Staff ID</label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder="ID" class="col-xs-10 col-sm-5" name="Name"/>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <button type="reset" class="btn btn-default">Reset Button</button>
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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


    </body>

@endsection
