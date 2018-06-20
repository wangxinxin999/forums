<?php
namespace Controller\Admin;
use Controller\Controller;
use Model\DB;
use Controller\User;
//登录
class Login extends Controller
{ 
  
   public function login()
   {  

       $this->display('login/login');
      
   }

   public function message()
   {


         $username=$_POST['username'];

         $password=$_POST['password'];
         
        $data['username']=$_POST['username'];
       $data['password']=$_POST['password'];

         
          $users=new user();

         // var_dump($users);die;
           $sql ='select * from user where username="'.$username.'" and password="' . $password. '"';
           
          
           // $db = C('db');
           $pdo=new \PDO("mysql:host=127.0.0.1;dbname=youzi","root","root");
           $data=$pdo->query($sql)->fetchAll();

           if($data)
           {
               echo "<script>alert('登录成功');location.href='index.php?controller=Index&&action=index'</script>";    
           }else{
            echo "检查用户名和密码";
           }

           // var_dump($pdo);die;
         // var_dump($data);die;
         // if($data)
         // {
         // 	echo "1";
         // }else{
         // 	echo "0";
         // }

         // var_dump($username);die;

       // echo "<script>alert('登录成功');location.href='index.php?controller=Index&&action=index'</script>";          
   }


}