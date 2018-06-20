<?php
namespace Controller\Home;

use Controller\Controller;
use Model\DB;

//干货控制器
class Category extends Controller
{ 
  
   public function index()
   {  
       $this->display('category/index');
   }




   public function duanzi()
   {
   	 $this->display("category/duanzi");
   }
}