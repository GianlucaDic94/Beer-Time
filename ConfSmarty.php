<?php
require('Smarty/Smarty.class.php');

class ConfSmarty{
   static function configuration(){
   $smarty=new Smarty();
   $smarty->template_dir='C:\xampp\htdocs\Beer-Time\Smarty\templates';
   $smarty->compile_dir='C:\xampp\htdocs\Beer-Time\Smarty\templates_c';
   $smarty->config_dir='C:\xampp\htdocs\Beer-Time\Smarty\configs';
   $smarty->cache_dir='C:\xampp\htdocs\Beer-Time\Smarty\cache';
   return $smarty;
   }
}

