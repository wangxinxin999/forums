<?php


namespace Controller;

class Controller
{


    public $assign;

    public function display($path)
    {
       @extract($this->assign);
       include './view/Admin/'.$path.'.html';
       // include './view/Home/'.$path.'.html';

    }

    public function assign($key,$value)
    {

      $this->assign[$key] =$value;
    }


}











// class Controller {
//      public $array;
//      public $key;
//      public $val;
//      public function assign($key,$val)
//      {
//      	$this->array[$key] =$val;
//      }


//       public  function display($filePath)
//       {    
//            //$name,$file
//       	   //$file= "/".$name."/".$file;         
//           //include ($file);
           
//           $this->assign($this->key,$this->val);
//           extract($this->array);
//             include $filePath.'.html';
//            if(file_exists($filePath)){

//            }
//            // include $filePath.'.html';
//       } 
    
   

// }