<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
$api= app('Dingo\Api\Routing\Router');
$api->version('v1',function ($api){
    $api->get('/hi',function(){
        return "hello";
    });

    //$api->get('/getAdmin','App\Http\Controllers\apiCallController@index');
    //  $api->post('/postComplain','App\Http\Controllers\busComplainController@saveBusComplain');
    $api->post('/PassengerLoginDBCheck','App\Http\Controllers\passengerController@PassengerLoginDBCheck');//POST or GET
    $api->post('/passengerRegistration','App\Http\Controllers\passengerController@passengerRegistration');
    $api->post('/updatePassenger','App\Http\Controllers\passengerController@updatePassenger');

    $api->post('/busLogin','App\Http\Controllers\busLocationController@busLogin');//changed
    $api->post('/saveLocation','App\Http\Controllers\busLocationController@saveLocationFromToGPSModule');
    $api->post('/getLocation','App\Http\Controllers\busLocationController@getBusLocationFormDB');//

    //bus complain
    $api->post('/getAllBusRoutes ','App\Http\Controllers\busComplainController@getAllBusRoutes');//checked
    $api->post('/BusInSelectedRoutes ','App\Http\Controllers\busComplainController@BusInSelectedRoutes'); //post or get
    $api->post('/saveBusComplain ','App\Http\Controllers\busComplainController@saveBusComplain');//changed

    ////bus stop info and train info
    $api->post('/getBusStops ','App\Http\Controllers\busStopController@getBusStops');//checked
    $api->post('/getBusStopsinRoute ','App\Http\Controllers\busStopController@getBusStopsinRoute');
    $api->post('/getTrainStations ','App\Http\Controllers\TrainRouteController@getTrainStations');
    $api->post('/getTrainStationsinRoute ','App\Http\Controllers\TrainRouteController@getTrainStationsinRoute');


    //display schedule
    $api->post('/getBusSchedule ','App\Http\Controllers\AppScheduleController@getBusSchedule');
    $api->post('/getTrainSchedule ','App\Http\Controllers\AppScheduleController@getTrainSchedule');

    //display bus list
    $api->post('/getBusList ','App\Http\Controllers\busListController@getBusList');


});

Route::get('/blank-page', function () {
    return view('blank-page');
});
Route::get('/bootstrap-elements', function () {
    return view('bootstrap-elements');
});

Route::get('/bootstrap-grid', function () {
    return view('bootstrap-grid');
});
Route::get('/BusRegistration', function () {
   return view('BusRegistration');
});
Route::get('/charts', function () {
    return view('charts');
});
Route::get('/forms', function () {
    return view('forms');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/index-rtl', function () {
    return view('index-rtl');
});
Route::get('/tables', function () {
    return view('tables');
});
Route::get('/TrainRegistration', function () {
    return view('TrainRegistration');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/blade', function () {
    return view('child');
});
//Route::get('/edit', function () {
//    return view('BusComplain');
//});
//Route::get('/login', function () {
//    return view('login');
//});
Route::get('/feedback', function () {
    return view('feedback');
});
//Route::get('/busstoplocation', function () {
//    return view('busstoplocation');
//});
//Route::get('/train-schedule', function () {
//    return view('train-schedule');
//});
Route::get('/railwaystation', function () {
    return view('railwaystation');
});

Route::get('/complain', function () {
    return view('complain');
});
Route::get('/search', function () {
    return view('search');
});



Route::group(['middleware' => ['web']],function(){


//    Route::get('/logout',[
//        'uses' => 'adminController@getLogout',
//        'as' => 'logout'
//    ]);
//
//
//    Route::get('/login',function(){
//        return view('login');
//    });
//    Route::get('/signup',function(){
//        return view('signup');
//    });
//    Route::get('/map',function(){
//        return view('map');
//    });
//    Route::get('/BusComplain',function(){
//        return view('BusComplain');
//    });
//    Route::get('/Dashboard',function(){
//        return view('Dashboard');
//    });
//    Route::post('/createpost',[
//        'uses' => 'PostController@postCreatePost',
//        'as' => 'post.create'
//    ]);
//
//
//    Route::get('/AdminProfile',function(){
//        return view('AdminProfile');
//    });
//    Route::post('/AdminProfile',[
//        'uses' => 'adminController@getAccount',
//        'as' => 'AdminProfile'
//    ]);
//    Route::post('/updateaccount',[
//        'uses' => 'adminController@postSaveAccount',
//        'as' => 'account.save'
//    ]);
//
//
//
//    Route::post('/login',[
//        'uses' => 'adminController@postSignIn',
//        'as' => 'login'
//    ]);
//    Route::post('/AdminSignUp',[
//        'uses'=>'adminController@postSignUp',
//        'as'=>'AdminSignUp'
//    ]);
//    Route::post('/postSignIn',[
//        'uses'=>'adminController@postSignIn',
//        'as'=>'postSignIn'
//    ]);
////    Route::get('/myLogin',[
////        'uses'=>'adminController@getLogin',
////        'as'=>'myLogin'
////    ]);
//    Route::post('/signUp',[
//        'uses' => 'adminController@postSignUp',
//        'as' => 'signUp'
//    ]);
//
//
//    Route::post('/submit',[
//       'uses' => 'BusController@busdetail',
//        'as' => 'submit'
//    ]);
//    Route::post('/tsubmit',[
//        'uses' => 'testControl@testdetail',
//        'as' => 'tsubmit'
//    ]);
//    Route::post('/bsubmit',[
//        'uses' => 'BusController@busdetail',
//        'as' => 'bsubmit'
//    ]);
//    Route::post('/Tsubmit',[
//        'uses' => 'TrainController@traindetail',
//        'as' => 'Tsubmit'
//    ]);
//
//
//
//
//    Route::post('/stopsubmit',[
//        'uses' => 'busstopContoller@stopdetail',
//        'as' => 'stopsubmit'
//    ]);
//    Route::get('/busstoplocation',[
//        'uses' => 'busstopContoller@getbusstop',
//        'as' => 'busstoplocation'
//    ]);
//    Route::get('/deletebusstop/{bus_stop_id}',[
//        'uses' => 'busStopController@deletebusstop',
//        'as' => 'busstop_item.delete'
//    ]);
//
//
//    Route::post('/stationsubmit',[
//        'uses' => 'RailwayStationController@stationdetail',
//        'as' => 'stationsubmit'
//    ]);
//    Route::get('/railwaystation',[
//        'uses' => 'RailwayStationController@getrailwaystation',
//        'as' => 'railwaystation'
//    ]);
//    Route::get('/deletestation/{station_id}',[
//        'uses' => 'RailwayStationController@deletestation',
//        'as' => 'railwaystation_item.delete'
//    ]);
//
//
//
//
//
//
//    Route::get('/dashboard',[
//        'uses'=>'adminController@getDashboard',
//        'as'=>'dashboard'
//    ]);
//    Route::get('/index',[
//        'uses' => 'adminController@getDashboard',
//        'as' => 'index'
//    ]);
//
//
//
//
//    Route::post('/tschedul',[
//        'uses' => 'trainschedulContoller@tscheduldetail',
//        'as' => 'tschedul'
//    ]);
//    Route::get('/train-schedule',[
//        'uses' => 'trainschedulContoller@getTrainSchedule',
//        'as' => 'train-schedule'
//    ]);
//    Route::get('/deletetrainschedule/{train_schedule_id}',[
//        'uses' => 'trainschedulContoller@deletetrainschedule',
//        'as' => 'tschedule_item.delete'
//    ]);
//
//
//
//    Route::post('/busschedul', [
//        'uses' => 'bschedulController@scheduldetail',
//        'as' => 'busschedul'
//    ]);
//    Route::get('/bus-schedule',[
//        'uses' => 'bschedulController@getBusSchedule',
//        'as' => 'bus-schedule'
//    ]);
//    Route::get('/deletebusschedule/{bus_schedule_id}',[
//        'uses' => 'bschedulController@deletebusschedule',
//        'as' => 'schedule_item.delete'
//    ]);
//
//
//
//    Route::get('/feedback',[
//        'uses' => 'busComplainController@getcomplain',
//        'as' => 'feedback'
//    ]);
//    Route::get('/BusComplain',[
//        'uses' => 'busComplainController@getbuscomplain',
//        'as' => 'BusComplain'
//    ]);
//    Route::get('/deletebuscomplain/{id}',[
//        'uses' => 'busComplainController@deletecomplain',
//        'as' => 'complain.delete'
//    ]);
//    Route::get('/report',[
//        'uses' => 'mailController@sendMail',
//        'as' => 'report'
//    ]);
//
//
//
//    Route::post('/search_code',[
//        'uses' => 'bschedulController@searchbus',
//        'as' => 'search_code'
//    ]);
//    Route::post('/search_code',[
//        'uses' => 'trainschedulContoller@searchtrain',
//        'as' => 'search_code'
//    ]);
//
//
//
//
//
//
//    Route::get('/mail',function(){
//        return view('sendMail');
//    });
//
//    Route::get('/mail',[
//        'uses' => 'mailController@sendMail',
//        'as' => 'mail'
//    ]);
////    Route::get('/reportde',[
////        'uses' => 'searchController@searchowner',
////        'as' => 'report'
////    ]);
//
////    Route::get('/report',[
////        'uses' => 'mailController@mailContent',
////        'as' => 'report'
////    ]);
////    Route::get('/send',[
////        'uses' => 'mailController@sendMailtest',
////        'as' => 'send'
////    ]);
//
//
////    Route::post('/sendMail',[
////        'uses' => 'adminController@postSignIn',
////        'as' => 'sendMail'
////    ]);
//
//   // Route::get('/report','mailController@sendMail' );
//    Route::get('/mail','mailController@sendMail' );
//    Route::get('notification', 'notController@notification');
//  //  Route::get('/postSignIn', 'adminController@postSignIn');
//
////
//   // Route::get('/delete','busComplainController@deletecomplain' );
//

    Route::get('/logout',[
        'uses' => 'adminController@getLogout',
        'as' => 'logout'
    ]);


    Route::get('/login',function(){
        return view('login');
    });
    Route::get('/signup',function(){
        return view('signup');
    });
    Route::get('/map',function(){
        return view('map');
    });
    Route::get('/BusComplain',function(){
        return view('BusComplain');
    });
    Route::get('/Dashboard',function(){
        return view('Dashboard');
    });
    Route::post('/createpost',[
        'uses' => 'PostController@postCreatePost',
        'as' => 'post.create'
    ]);


    Route::get('/AdminProfile',function(){
        return view('AdminProfile');
    });
    Route::get('/AdminProfile',[
        'uses' => 'adminController@getAccount',
        'as' => 'AdminProfile'
    ]);
//    Route::post('/AdminProfile',[
//        'uses' => 'adminController@getadmindata',
//        'as' => 'AdminProfile'
//    ]);
    Route::post('/updateaccount',[
        'uses' => 'adminController@postSaveAccount',
        'as' => 'account.save'
    ]);
    Route::get('/userimage/{filename}',[
        'uses' => 'adminController@getUserimage',
        'as' => 'profile.image'
    ]);



    Route::post('/login',[
        'uses' => 'adminController@postSignIn',
        'as' => 'login'
    ]);
    Route::post('/AdminSignUp',[
        'uses'=>'adminController@postSignUp',
        'as'=>'AdminSignUp'
    ]);
    Route::post('/postSignIn',[
        'uses'=>'adminController@postSignIn',
        'as'=>'postSignIn'
    ]);
//    Route::get('/myLogin',[
//        'uses'=>'adminController@getLogin',
//        'as'=>'myLogin'
//    ]);
    Route::post('/signUp',[
        'uses' => 'adminController@postSignUp',
        'as' => 'signUp'
    ]);


    Route::post('/submit',[
        'uses' => 'BusController@busdetail',
        'as' => 'submit'
    ]);
    Route::post('/tsubmit',[
        'uses' => 'testControl@testdetail',
        'as' => 'tsubmit'
    ]);
    Route::post('/bsubmit',[
        'uses' => 'BusController@busdetail',
        'as' => 'bsubmit'
    ]);
    Route::post('/Tsubmit',[
        'uses' => 'TrainController@traindetail',
        'as' => 'Tsubmit'
    ]);




    Route::post('/stopsubmit',[
        'uses' => 'busstopContoller@stopdetail',
        'as' => 'stopsubmit'
    ]);
    Route::get('/busstoplocation',[
        'uses' => 'busstopContoller@getbusstop',
        'as' => 'busstoplocation'
    ]);
    Route::get('/deletebusstop/{bus_stop_id}',[
        'uses' => 'busStopController@deletebusstop',
        'as' => 'busstop_item.delete'
    ]);


    Route::post('/stationsubmit',[
        'uses' => 'RailwayStationController@stationdetail',
        'as' => 'stationsubmit'
    ]);
    Route::get('/railwaystation',[
        'uses' => 'RailwayStationController@getrailwaystation',
        'as' => 'railwaystation'
    ]);
    Route::get('/deletestation/{station_id}',[
        'uses' => 'RailwayStationController@deletestation',
        'as' => 'railwaystation_item.delete'
    ]);






    Route::get('/dashboard',[
        'uses'=>'adminController@getDashboard',
        'as'=>'dashboard'
    ]);
    Route::get('/index',[
        'uses' => 'adminController@getDashboard',
        'as' => 'index'
    ]);




    Route::post('/tschedul',[
        'uses' => 'trainschedulContoller@tscheduldetail',
        'as' => 'tschedul'
    ]);
    Route::get('/train-schedule',[
        'uses' => 'trainschedulContoller@getTrainSchedule',
        'as' => 'train-schedule'
    ]);
    Route::get('/deletetrainschedule/{train_schedule_id}',[
        'uses' => 'trainschedulContoller@deletetrainschedule',
        'as' => 'tschedule_item.delete'
    ]);



    Route::post('/busschedul', [
        'uses' => 'bschedulController@scheduldetail',
        'as' => 'busschedul'
    ]);
    Route::get('/bus-schedule',[
        'uses' => 'bschedulController@getBusSchedule',
        'as' => 'bus-schedule'
    ]);
    Route::get('/deletebusschedule/{bus_schedule_id}',[
        'uses' => 'bschedulController@deletebusschedule',
        'as' => 'schedule_item.delete'
    ]);



    Route::get('/feedback',[
        'uses' => 'busComplainController@getcomplain',
        'as' => 'feedback'
    ]);
    Route::get('/BusComplain',[
        'uses' => 'busComplainController@getbuscomplain',
        'as' => 'BusComplain'
    ]);
    Route::get('/deletebuscomplain/{id}',[
        'uses' => 'busComplainController@deletecomplain',
        'as' => 'complain.delete'
    ]);


    Route::get('/report',[
        'uses' => 'mailController@sendMail',
        'as' => 'report'
    ]);




    Route::post('/search_code',[
        'uses' => 'bschedulController@searchbus',
        'as' => 'search_code'
    ]);
    Route::post('/search_code1',[
        'uses' => 'trainschedulContoller@searchtrain',
        'as' => 'search_code1'
    ]);








    // Route::get('/report','mailController@sendMail' );
    //  Route::get('/mail','mailController@sendMail' );
    Route::get('notification', 'notController@notification');
    //  Route::get('/postSignIn', 'adminController@postSignIn');

//
    // Route::get('/delete','busComplainController@deletecomplain' );







});
