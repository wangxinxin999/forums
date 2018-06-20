<?php

namespace Controller\Admin;
use Controller\Controller;
use Model\DB;
use User\User;

//系统设置

class System extends Controller
{ 
   //系统设置
   public function system_base()
   {  
   
       $this->display('system/system_base');
      
   }
    //栏目管理
    public function system_category()
   {  
   
       $this->display('system/system_category');
      
   }

    //数据字典
    public function system_data()
   {  
   
       $this->display('system/system_data');
      
   }

   //屏蔽词
    public function system_shielding()
   {  
   
       $this->display('system/system_shielding');
      
   }
    //系统日志
    public function system_log()
   {  
   
       $this->display('system/system_log');
      
   }
  

}