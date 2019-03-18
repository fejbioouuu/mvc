<?php
/**
 * Created by PhpStorm.
 * User: Fejbioouuu
 * Date: 25.02.2019
 * Time: 11:50
 */
class absence extends controller {

    public static function doSomething(){
        print_r(self::query("SELECT * FROM absences"));
    }

}