<?php

namespace Controller\Admin;
use Controller\Controller;
use Model\DB;
use User\User;
//产品管理
class Product extends Controller
{ 
   //品牌管理
   public function product_brand()
   {  
   
       $this->display('product/product_brand');
      
   }
   //分类管理
   public function product_category()
   {

   	  $this->display('product/product_category');
   }

   public function product_category_add()
   {
        $this->display('product/product_category_add');          
   } 
   //产品管理
   public function product_list()
   {
   	   $this->display('product/product_list');  
   }

   //产品展示
    public function product_show()
    {
    	$this->display('product/product_show');
    }
    //产品添加
     public function product_add()
    {
    	$this->display('product/product_add');
    }

}
