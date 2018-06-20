<?php
namespace Controller\Admin;
use Controller\Controller;
use Model\DB;
use User\User;
//图片管理模块
class Picture extends Controller
{ 
  
   public function picture_list()
   {  
       
       $this->display('picture/picture_list');
      
   }
 
   //添加照片
   public function picture_add()
   {

        $this->display('picture/picture_add');
   }

   //展示图片
   public function picture_show()
   {
   	   $this->display('picture/picture_show');
   }

}