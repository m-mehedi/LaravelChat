<?php
namespace Coderev\Contact;

use Carbon\Laravel\ServiceProvider;

class ContactServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','contact');
    }

    public function register(){

    }
}
