<?php

namespace Controller\Admin;
use Controller\Controller;
use Model\DB;
use User\User;
//管理员管理
class Admin extends Controller
{ 
    //角色管理
   public function admin_role()
   {  
   
       $this->display('admin/admin_role');
      
   }

   //权限管理
   public function admin_permission()
   {
   	  $this->display('admin/admin_permission');
   }

   //管理员列表
    public function admin_list()
   {
   	  $this->display('admin/admin_list');
   }


}