<?php

namespace Controller\Admin;
use Controller\Controller;
use Model\DB;
use User\User;
//会员管理
class Member extends Controller
{ 
   //会员列表
   public function member_list()
   {  
   
       $this->display('member/member_list');
      
   }
   //删除的会员
    public function member_del()
   {  
   
       $this->display('member/member_del');
      
   }
   
   //浏览管理 
    public function member_record_browse()
   {  
   
       $this->display('member/member_record_browse');
      
   }

   //下载记录
     public function member_record_download()
   {  
   
       $this->display('member/member_record_download');
      
   }

   //分享记录 
    public function member_record_share()
   {  
   
       $this->display('member/member_record_share');
      
   }
}