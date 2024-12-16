<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LocalMiddleware;
use App\Services\Custom;


Route::get('/', function () {
    return view('singleton', [
        'title' => '루트',
    ]);
})->name('root');


Route::middleware([LocalMiddleware::class])->group(function () {
    // Custom::setData('페이지 입니다!');
    Route::get('/page',function(){
       

        return view('singleton',[
            'title' => '페이지',
            'msg' => Custom::getData(),
        ]);
    })->name('page');
    Route::get('/blog',function(){
        // Custom::setData('블로그 입니다!');

        return view('singleton',[
            'title' => '블로그',
            'msg' => Custom::getData(),
        ]);
    })->name('blog');
});
