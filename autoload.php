<?php


spl_autoload_register(function ($class_name){
    include('shapes/'.$class_name.'.class.php');
})

 ?>
