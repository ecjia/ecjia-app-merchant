<?php

namespace Ecjia\App\Merchant;

use Royalcms\Component\App\AppParentServiceProvider;

class MerchantServiceProvider extends  AppParentServiceProvider
{
    
    public function boot()
    {
        $this->package('ecjia/app-merchant', null, dirname(__DIR__));
    }
    
    public function register()
    {
        
    }
    
    
    
}