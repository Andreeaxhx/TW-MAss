<?php

require_once('./Controllers/aboutUsController.php'); 
require_once('./Controllers/homeController.php'); 
require_once('./Controllers/gtkyController.php'); 
require_once('./Controllers/makeupController.php'); 
require_once('./Controllers/productsController.php'); 
require_once('./Controllers/skincareController.php'); 


Route::set('aboutus', function(){
    aboutus::CreateView('aboutus');
    aboutus::test();
});

Route::set('home', function(){
    home::CreateView('home');
});

Route::set('gettingtoknowyou', function(){
    aboutus::CreateView('gettingtoknowyou');
});

Route::set('makeup', function(){
    home::CreateView('makeup');
});

Route::set('products', function(){
    aboutus::CreateView('products');
});

Route::set('skincare', function(){
    home::CreateView('skincare');
});

?>