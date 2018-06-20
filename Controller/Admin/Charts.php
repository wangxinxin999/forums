<?php

namespace Controller\Admin;
use Controller\Controller;
use Model\DB;
use User\User;
//系统管理
class Charts extends Controller
{ 
   //折线图
   public function charts_1()
   {  
   
       $this->display('charts/charts_1');
      
   }

   public function charts_2()
   {  
   
       $this->display('charts/charts_2');
      
   }

    public function charts_3()
   {  
   
       $this->display('charts/charts_3');
      
   }

    public function charts_4()
   {  
   
       $this->display('charts/charts_4');
      
   }

    public function charts_5()
   {  
   
       $this->display('charts/charts_5');
      
   }

    public function charts_6()
   {  
   
       $this->display('charts/charts_6');
      
   }

    public function charts_7()
   {  
   
       $this->display('charts/charts_7');
      
   }
}