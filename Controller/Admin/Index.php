<?php

namespace Controller\Admin;
use Controller\Controller;
use Model\DB;
use User\User;
//首页
class Index extends Controller
{ 
   
   public function index()
   {  
   
       $this->display('index/index');
      
   }


    //我的桌面
	 public function welcome()
	 {
       $this->display('index/welcome');
      
	 }


}