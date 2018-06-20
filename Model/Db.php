<?php
//数据库类
namespace Model;

class DB
{   
  

   public function __construct()
   {
      $db = C('db');
      return $this->pdo=new \PDO("mysql:host=".$db['host'].";dbname=".$db['db_name'],$db['username'],$db['password']);

   }
  
  

    public function add($table_name,$parameters)
    {
        $sql = 'insert into '.$table_name;

        $filed = '(';
        $value = " values (";
        foreach ($parameters as $key => $val) {
            $filed .= $key.',';
            $value .= "'".$val."'".",";
         }
         
        $sql .= trim($filed, ',').')'.trim($value, ',').')';
            
        return $this->pdo->exec($sql);

    }
  

    public function delete($table_name,$where)
    {

       $sql="delete from ".$table_name."  where id='$where'";

       return  $this->pdo->exec($sql);

        
    }

    public function findAll($pdo,$table_name)
    {
        $sql = "select * from " . $table_name . "";

      $data=$pdo->query($sql)->fetchAll();
      $arr = array();
          foreach ($data as $key => $value) {
              $arr[$key]['user'] = $data[$key]['user'];
              $arr[$key]['title'] = $data[$key]['title'];
              $arr[$key]['content'] = $data[$key]['content'];
              $arr[$key]['id'] = $data[$key]['id'];
               $arr[$key]['date'] = $data[$key]['date'];
          }
          return $arr;
      
    }

  

    public function show($table_name)
    {


        $sql = "select * from " . $table_name . "";

        $res=$this->pdo->query($sql)->fetchAll();

        return $res;
    }


}