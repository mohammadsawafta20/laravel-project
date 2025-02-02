<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testcontroller;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\UploadController;
use App\mail\TestMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
    
});
Route::get('/send',[Postcontroller::class ,'sendemail']);

Route::get('/email',function(){
$name = "mohammad";
$from = "laravel 11 mail"; 
$list_name =[
   "mohammad"=>"hamzeabo255@gmail.com",
    "hamzeh"=>"sawafta123456@gmail.com"
];
    
foreach($list_name as $name=>$email)

    Mail::to($email)->send(new TestMail(compact('name','from')));


dd('email send secessfuly');
});


//admin page 
Route::get('/admin',[Postcontroller::class , 'admin'])->name('admin.admin');
Route::get('/admin/showtable',[Postcontroller::class , 'showtable'])->name('admin.showtable');


//admin page 
Route::get('/search',[Postcontroller::class ,'search'] )->name('electro.search');
Route::get('/electro/serachview', [PostController::class, 'searchview'])->name('searchview.index');
//seach user or data 

//uploade file uploood
Route::get('uploade/{post}/edit', [UploadController::class, 'edit'])->name('uploade.edit');
Route::put('/uploade/{post}', [UploadController::class, 'uploood'])->name('uploade.uploood');

Route::delete('/uploade/{post}',[UploadController::class, 'destroy'])->name('uploade.destroy');
Route::get('uploade/', [UploadController::class, 'index'])->name('uploade.imageshow');
Route::get('/uploade/create', [UploadController::class, 'create'])->name('uploade.create');
Route::post('/uploade/store', [UploadController::class, 'store'])->name('uploade.store');
//uploade file 
Route::get('/electro/index', [PostController::class, 'elindex'])->name('electro.index'); 
Route::get('/electro/createnews', [PostController::class, 'createnews'])->name('electro.createnews'); 
Route::post('/electro/createnewsstore', [PostController::class, 'createnewsstore'])->name('electro.createnewsstore'); 

Route::get('/electro/contact',[PostController::class, 'contact'])->name('electro.contact'); 
//login section

Route::get('/posts/dashboard', [PostController::class, 'dashboard'])->name('auth.dashboard'); 
Route::get('/posts/login', [PostController::class, 'login'])->name('auth.login');
Route::post('custom-login', [PostController::class, 'customLogin'])->name('login.custom'); 
//Route::get('registration', [PostController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [PostController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [PostController::class, 'signout'])->name('signout');

//login section







Route::get('/index',[PostController::class, 'index'])->name('posts.index');
Route::get('/posts/showstore/',[PostController::class, 'showstore'])->name('posts.showstore');
//Route::get('/posts/login',[PostController::class, 'login'])->name('posts.login');

Route::get('/posts/regester',[Postcontroller::class ,'regester'])->name ('posts.regester');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
Route::post('/posts/storee', [PostController::class, 'storee'])->name('posts.storee');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::get('/posts/{post}/editestore', [PostController::class, 'editestore'])->name('posts.editestore');
//Route::put('/posts/{post}', [PostController::class, 'updater'])->name('posts.updater');
//Route::put('/posts/{post}', [PostController::class, 'udpost'])->name('posts.udpost');

Route::put('/posts/{post}', [PostController::class, 'updatee'])->name('posts.updatee');
Route::delete('/posts/{post}',[PostController::class, 'destroy'])->name('posts.destroy');

//1- structure change for database (create table , edit column , remove column)
//2- operations on database (insert record, edit record, delete record)

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
