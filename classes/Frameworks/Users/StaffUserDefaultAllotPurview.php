<?php

namespace Ecjia\App\Merchant\Frameworks\Users;

use Ecjia\System\Frameworks\Contracts\UserAllotPurview;
use RC_DB;

class StaffUserDefaultAllotPurview implements UserAllotPurview
{
    
    protected $userid;
    
    public function __construct($userid)
    {
        $this->userid = $userid;
    }
    
    
    public function getUserId()
    {
        return $this->userid;
    }
    
    
    public function save($value)
    {
        return RC_DB::table('staff_user')->where('user_id', $this->userid)->update(['action_list' => $value]);
    }
    
    
    public function get()
    {
        return RC_DB::table('staff_user')->where('user_id', $this->userid)->pluck('action_list');
    }
    
}