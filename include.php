<?php

require_once "ConfSmarty.php";

require_once "FrontController.php";


foreach(glob("Entity/*.php") as $file){
    require_once $file;}

#require_once "Foundation/Fdb.php";

foreach (glob("Foundation/*.php") as $file){
    require_once $file;}
    
foreach (glob("View/*.php") as $file){
    require_once $file;}
    
foreach (glob("Controller/*.php") as $file){
    require_once $file;}
