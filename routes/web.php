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
/*
Route::get('/', function () {
    // return ('welcome to Laravel');
    return view('welcome');
});

Route::get('about', function () {
    // return ('gioi thieu ve chung toi');
    return view('about');
});


Route::any('submit-form', function() {
    return 'Process Form';
});

Route::get('about/{theSubject}', function($theSubject) {
    return $theSubject.' content detail here !';
});
// Route::get('{write}/{art}', function($write,$art) {
//     return 'write is :'.$write.' And Art :'.$art;
// });
// Route::get('/', 'HomeController@showWelcome');
Route::get('where', function() {
    return Redirect::to('about');
});

Route::get('cal-view', function(){
	$hoten = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic dolore voluptas nihil, soluta inventore ipsa voluptatum porro natus ut iusto magnam eius eaque, beatae quibusdam modi, ipsam officia dolor. Impedit.';
	$job = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea.';
	return view('layout.sub.view',compact('hoten','job'));
});

Route::get('the-gioi', 'WelcomeController@hochiminh');

// Dinh danh cho Route
Route::get('ho-chi-minh', ['as'=>'hcm',function()
{
	return 'Chao mung den voi Ho Chi Minh';
}]);

// Route getGroup
Route::group(['prefix'=>'mon-an'], function()
{
	Route::get('bun-bo', function () {
		return 'Đây là trang bán bún bò';
	});
	Route::get('bun-mam', function () {
		return 'Đây là trang bán bún mắm';
	});
	Route::get('bun-moc', function () {
		return 'Đây là trang bán bún mộc';
	});
	Route::get('bun-rieu', function () {
		return 'Đây là trang bán bún riêu';
	});
});

// Sử dụng views
Route::get('goi-view', function()
{
	return view('layout.sub.view');
});
Route::get('goi-layout', function()
{
	return view('layout.sub.layout');
});

// View share
// sử dụng được cho tất cả
View::share('title', 'Lập trình Laravel 5x');

// view Composer
// chỉ cho hiển thị view cần gọi
View::composer(['layout.sub.layout','layout.sub.view'], function($view)
{
	return $view->with('thongtin','Đây là trang cá nhân');
});


Route::get('goi-master', function ()
{
	return view('views.layout');
});

Route::get('url/full', function()
{
  return URL::full();
});

Route::get('url/to', function()
{
  return URL::to('users',['Hoadsad','098453453'],true);
});
Route::get('url/asset', function()
{
  // return URL::asset('css/style.css');
	return asset('css/mystyle.css');
});


Route::get('users/{name}-{phone}', function($name,$phone) {
    return "Tên của tôi là: {{name}}, số điện thoại : {{phone}}";
});

Route::get('query/select-all', function() {
    $data = DB::Table('tbl_categories')->select('cateName','slug')->get();
    echo "<pre>";
    print_r($data);
});

Route::get('query/order', function() {
	$data = DB::Table('products')->select('name','price','description','active')->orderBy('name','DESC')->get();
	echo "<pre>";
	print_r($data);
});

Route::get('query/limit', function() {
	$data = DB::Table('products')->select('name','price','description','active')->orderBy('name','DESC')->skip(2)->take(2)->get();
	echo "<pre>";
	print_r($data);
});

Route::get('query/between', function() {
	$data = DB::Table('products')->select('name','price','description','active')->orderBy('price','ASC')->whereBetween('price',[400000,450000])->get();
	echo "<pre>";
	print_r($data);
});

Route::get('query/in', function() {
	$data = DB::Table('products')->select('name','price','description','active')->orderBy('price','ASC')->whereIn('price',[380000,400000,450000])->get();
	echo "<pre>";
	print_r($data);
});


Route::get('about/directions', function() {
    return 'This is about/directions';
});

Route::get('where', function() {
    return Redirect::to('about/directions');
});
*/
Route::get('home', 'HomeController@showWelcome');
Route::get('about', 'AboutController@showDetail');
