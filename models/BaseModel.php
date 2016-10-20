<?php
/**
 * Create by Long ND
 * Create date: 20/10/2016 22:15
 * Info:
 * Webs: http://nguyenduclong.com - https://www.facebook.com/mrlongitqn
 * Mobile: 0962112102 - 01222444992
 * Skype - Yahoo - GMail: mrlong.itqn
 */

namespace models;


class BaseModel
{
    public $db;
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function Dump($data, $die=true)
    {
        var_dump($data);
        if($die)
             die();
    }
    public function Show($data, $die=true)
    {
        echo $data;
        if($die)
            die();
    }
}