<?php
/**
 * User: IGrock
 * Date: 23.03.2018
 * Time: 19:26
 */

class hello
{
    public function __construct($str)
    {
        echo $str;
    }
}

$string = "hello";

new hello($string);