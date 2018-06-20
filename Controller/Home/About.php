<?php
namespace Controller\Home;

use Controller\Controller;
use Model\DB;

//关于控制器
class About extends Controller
{ 
  
   public function index()
   {
   	 $this->display('about/index');
   }
}