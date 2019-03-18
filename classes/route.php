<?php
/**
 * Created by PhpStorm.
 * User: Fejbioouuu
 * Date: 25.02.2019
 * Time: 11:33
 */
class route {

    public static $validRoutes = array();

    public static function set($route, $function){

        self::$validRoutes[] = $route;

       // print_r(self::$validRoutes);
        if ($_GET['url'] == $route){
            $function->__invoke();
        }


    }
}