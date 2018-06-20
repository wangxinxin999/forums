<?php
//前台段子
namespace Controller\Home;

use Controller\Controller;
use Model\DB;


//段子控制器
class Duan extends Controller
{ 
  
   public function index()
   {  
       $this->display('duan/index');
   }


}