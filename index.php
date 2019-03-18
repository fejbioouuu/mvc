<?php
/**
 * Created by PhpStorm.
 * User: Fejbioouuu
 * Date: 25.02.2019
 * Time: 11:07
 */

require_once ('routes.php');

function __autoload($class_name) {
    if (file_exists('./classes/'.$class_name.'.php')){
    require_once './classes/'.$class_name.'.php';
}else if (file_exists('./controllers/'.$class_name.'.php')){
        require_once './controllers/'.$class_name.'.php';
    }
}