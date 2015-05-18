<?php
/**
 * Created by PhpStorm.
 * User: Amadeus
 * Date: 18/05/2015
 * Time: 09:47
 */

namespace App\Services;


class Method {
    public static function verifyMethod($method, $verify){
        if($method == $verify)
            return true;
        else
            return false;
    }
}
