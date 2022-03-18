<?php

Route::get('contact', function(){
    return view('contact::contact');
})->name('contact');

Route::post('contact', function(Request $request){
    dd($request->name);
    return $request->all();
});