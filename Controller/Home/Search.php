<?php
namespace Controller\Home;

use Controller\Controller;
use Model\DB;

//搜索控制器
class Search extends Controller
{ 
  
   public function index()
   {
   
     $this->display("search/index");
   }
}