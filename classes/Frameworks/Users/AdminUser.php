<?php

namespace Ecjia\App\Platform\Frameworks\Users;

use Ecjia\System\Frameworks\Contracts\UserInterface;
use Ecjia\App\Platform\Frameworks\Users\AdminUserAllotPurview;
use Royalcms\Component\Repository\Repositories\AbstractRepository;

class AdminUser extends AbstractRepository implements UserInterface
{
    
    protected $model = 'Ecjia\App\Platform\Models\AdminUserModel';
    
    protected $user;
    
    /**
     * 
     * @var \Ecjia\App\Platform\Frameworks\Users\AdminUserAllotPurview
     */
    protected $purview;
    
    public function __construct($userid, $purviewClass = null)
    {
        parent::__construct();
        
        $this->user = $this->find($userid);
        
        if (is_string($purviewClass) && class_exists($purviewClass)) {
            $this->purview = new $purviewClass($userid);
        }
        elseif (is_callable($purviewClass)) {
            $this->purview = $purviewClass($userid);
        }
        elseif (is_null($purviewClass)) {
            $this->purview = new AdminUserAllotPurview($userid);
        }
    }
    
    /**
     * 获取用户名
     */
    public function getUserName()
    {
        return $this->user->user_name;
    }
    
    /**
     * 获取用户ID
     */
    public function getUserId()
    {
        return $this->user->user_id;
    }
    
    /**
     * 获取用户的类型
     */
    public function getUserType()
    {
        return 'admin';
    }
    
    /**
     * 获取用户邮箱
     */
    public function getEmail()
    {
        return $this->user->email;
    }
    
    /**
     * 获取用户最后一次登录时间
     */
    public function getLastLogin()
    {
        return $this->user->last_login;
    }
    
    /**
     * 获取用户最后一次登录IP
     */
    public function getLastIp()
    {
        return $this->user->last_ip;
    }
    
    /**
     * 获取用户权限列表
     */
    public function getActionList()
    {
        return $this->purview->get();
    }
    
    /**
     * 设置用户公众平台权限
     * @param string $purview
     * @return boolean
     */
    public function setActionList($purview)
    {
        return $this->purview->save($purview);
    }
    
    
    /**
     * 获取用户设置的语言类型
     */
    public function getLangType()
    {
        return $this->user->lang_type;
    }
    
    /**
     * 获取用户的角色ID
     */
    public function getRoleId()
    {
        return $this->user->role_id;
    }
    
    /**
     * 获取用户的类型
     */
    public function getAddTime()
    {
        return $this->user->add_time;
    }
    
}