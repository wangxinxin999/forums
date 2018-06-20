<?php

namespace Controller\Admin;
use Controller\Controller;
use Model\DB;
use User\User;
//评论管理
class Feedback extends Controller
{ 

   public function feedback_list()
   {  
   
       $this->display('feedback/feedback_list');
      
   }

}