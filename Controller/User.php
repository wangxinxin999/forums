<?php
//用户类

namespace Controller;
use Model\DB;

class user
{ 
     //登录
   
   // $pdo=new DB(); 

   public function login($user,$password,$pdo)
   {  
      
        // $sql="select * from userm where user='$user'";
        $sql ='select * from user where username="' . $user .'" and password="' . $password . '"';

        $data = $pdo->query($sql)->fetchAll();


       $arr=array();
       foreach ($data as $key => $value) {
       	$arr['user'] =$data[$key]['user'];
       	$arr['password']=$data[$key]['password'];
       }


       if($arr== null)
       {
       	 return 0;
       }elseif ($dat==$password) {
         return 1; 
       }else{
       	return 2;
       }
       
       // $db=new DB();
       // var_dump($db);
       // echo 1;
       //  $str= 'hello world!';
       //  $this->assign('str',$str);
       // $this->display('user/login');
        
      

       // include('view/user/login.html');
   }



     //添加
   public function register($pdo,$table_name,$arr)
   {

       $sql = 'insert into '.$table_name;

        $filed = '(';
        $value = " values (";
        foreach ($arr as $key => $val) {
            $filed .= $key.',';
            $value .= "'".$val."'".",";
         }

        $sql .= trim($filed, ',').')'.trim($value, ',').')';
        
       $res= $pdo->exec($sql);
       return $res;

   }

   



}