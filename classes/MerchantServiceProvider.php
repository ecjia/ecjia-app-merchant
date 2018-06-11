<?php

namespace Ecjia\App\Merchant;

use Royalcms\Component\App\AppServiceProvider;

class MerchantServiceProvider extends  AppServiceProvider
{
    
    public function boot()
    {
        $this->package('ecjia/app-merchant');
    }
    
    public function register()
    {
        
    }
    
    
    
}