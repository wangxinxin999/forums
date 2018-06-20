<?php
namespace Controller\Admin;
use Controller\Controller;
use Model\DB;
use User\User;
//资讯管理模块
class Article extends Controller
{ 
  
   public function article_list()
   {  
         $db=new DB();
         $res=$db->show('article');
          $this->assign('res',$res);
         // var_dump($res);die;

         $this->display('article/article_list');
      
   }
   //添加资讯
    public function article_add()
   {  
      
       $this->display('article/article_add');
      
   }

   //资讯添加
    public function article_insert()
    {
      
      // var_dump($_POST);die;
      $data['articletitle']=$_POST['articletitle'];
      $data['articletitle2']=$_POST['articletitle2'];
      $data['articlecolumn']=$_POST['articlecolumn'];
      $data['articletype']=$_POST['articletype'];
      $data['articlesort']=$_POST['articlesort'];
      $data['keywords']=$_POST['keywords'];
      $data['abstract']=$_POST['abstract'];
      $data['author']=$_POST['author'];
      $data['sources']=$_POST['sources'];
      $data['allowcomments']=$_POST['allowcomments'];
      $data['datemin']=$_POST['datemin'];
      $data['datemax']=$_POST['datemax'];
      $data['article']=$_POST['article'];
        
        $db=new DB();
        
         $res=$db->add('article',$data);
         // var_dump($res);die;
          if($res)
          {
          	echo "<script>alert('添加成功');location.href='index.php?controller=Article&&action=article_list'</script>";
          }else{
          	echo "<script>alert('添加失败');location.href='index.php?controller=Article&&action=article_insert'</script>";

          }

    }

   


   //编辑修改
   public function article_update()
   {
       
      $this->display('article/article_update');
   }


   //编辑删除
   public function article_del()
   {
   	 $id=$_GET['id'];

   	 $db=new DB();  
   
     $res=$db->delete('article',$id);
     if($res)
     {
	 echo "<script>alert('删除成功');location.href='index.php?controller=Article&&action=article_list'</script>";
     }else{
	 echo "<script>alert('删除失败');location.href='index.php?controller=Article&&action=article_list'</script>";
     }

   }

}
