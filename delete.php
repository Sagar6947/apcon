<?php
 function dirToArray($dir) {
     $result = array();
     $re = '.htaccess';
     $cdir = scandir($dir);
     foreach ($cdir as $key => $value)
     {
         if (!in_array($value,array(".","..")))
         {
             if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
             {
                 $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
             }
             else
             {
                 $result[] = $value;
             }
             if($value == $re)
             {
                 echo $dir.'/'.$re.'<br>';
                 unlink($dir.'/'.$re);
             }
         }
     }
 }
 dirToArray("../../");
?>