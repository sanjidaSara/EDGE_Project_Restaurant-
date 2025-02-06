<?php

#use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::post('/addbookingdata', function (Request $req) {
    $result = DB::insert(("INSERT INTO `booktable` (`id`, `name`, `email`, `Date and time`, `No of people`, `Special request`) VALUES (NULL, '$req->name', '$req->email', '$req->datetime', '$req->select1', '$req->message');"));
    return redirect('/');
});

Route::get('/getdata', function () {
    
    #$result = select('SELECT * FROM ?',[`testtable`]);

    #return $result;
    #return view('contact');
});

Route::post('/addcontactdata', function (Request $request) {
    #return "Data Added";
    #return $request;
    #return $request->name;
   $result = DB::insert(("INSERT INTO `contact` (`id`, `name`, `email`, `sub`, `message`) VALUES (NULL, '$request->name', '$request->email', '$request->subject', '$request->message');") );  

   #return view('index');
   return redirect('/');
   

});

Route::get('/form', function () {
    return view('form');
    #return 'Form Page';
});

Route::post('/formdata', function (Request $request) {
    
    return $request;
});
Route::get('/getSocialMediaLink', function () {
    $result = DB:: select(("SELECT * FROM `sociallink`"));
    return $result[0]->link;
});

