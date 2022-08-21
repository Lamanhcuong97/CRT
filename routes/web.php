<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\District;

Auth::routes();


/*Adhoc rout*/
/*Page rout*/
Route::get('/index', function () {
	
    return view('index');
});





/*Download file TC and EF report*/












/*Download file AN Law*/
Route::get('/an01/{ts}', function () {
    
    $filepath = public_path('adhoc/AN/')."AN01.docx";
    return Response::download($filepath);
});

/*---------------------End of Adhoc---------------------------*/








Route::post('/login', 'IndexController@login');
Route::get('/logout', 'IndexController@logout');
Route::get('/download/{name}','DownloadController@download');

Route::get('/clear/all/', function(){
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return "CACHE CLEARED, VIEW CLEARED, CACHE CONFIGED.";
  });

  Route::get('/ctrviews', 'CtrviewsController@replyviews');
//   Route::get('/admin/user', 'AdminController@admin_user');
//   Route::post('/admin/user/add', 'AdminController@admin_user_add');

Route::middleware('admin:1,2,3,4','auth')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/reset', function () {
        return view('reset');
    });
    Route::post('/reset/add', 'IndexController@reset');
    Route::get('hello', 'MyController@hello');
    Route::resource('articles', 'ArticlesController');
    Route::resource('create', 'ArticlesController');
    Route::post('/store', 'ArticlesController@store');
    //STR Online
 

// PDF Generating 20180404
    Route::post('gpdf', 'PdfControllers@pdfgenerate');
    Route::post('strpdf', 'PdfControllers@strpdfgenerate');
	// CTR user sent form UserPage1
    // Route::get('/ctrviews', 'CtrviewsController@replyviews');
    // CTR admin
    Route::post('ctrstore', 'CtrController@save');
    
    

    // Nilanhdone added 17 Feb
    // CTR person show form search and result
    Route::get('ctrpersonstats', 'CtrController@ctrpersonstats');
    Route::get('ctrpersonsearch', 'CtrController@ctrpersonsearch');
    
    // CTR Legal search form and result
    Route::get('ctrlegalstats', 'CtrController@ctrlegalstats');
    Route::get('ctrlegalsearch', 'CtrController@ctrlegalsearch');

    //CTR Notification
    Route::get('person-notify','CtrController@personnotify');

    
    Route::get('ctrsearch', 'CtrController@CtrSearchForm');
    Route::get('ctrstats', 'CtrController@ctrstats');



    //nokame

    Route::get('/comment', function () {
        return view('comment.create');
    });

    Route::post('commentstore', 'CommentController@add');


    // Route::get('/viewcomment', function () {
    //     return view('comment.views');
    // });

   
    Route::get('/viewcomment', 'CommentController@commentshow');
    // CTR  all inbox Adminpage
    Route::get('/ctrall', 'CtrController@ctrshow');

    // CTR user all sent UserPage 2
    Route::get('/ctrall_rp', 'CtrController@ctrshow_rp');




    
    Route::get('/docviews', function () {
        return view('stronlines.docviews');
    });
    Route::post('docstore', 'DocController@save');
    Route::get('/docall', 'DocController@docshow');






    

    
	
});



