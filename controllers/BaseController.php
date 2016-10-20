<?php
/**
 * Create by Long ND
 * Create date: 20/10/2016 22:22
 * Info:
 * Webs: http://nguyenduclong.com - https://www.facebook.com/mrlongitqn
 * Mobile: 0962112102 - 01222444992
 * Skype - Yahoo - GMail: mrlong.itqn
 */

namespace controllers;


class BaseController
{
    public function Dump($data, $die = true)
    {
        var_dump($data);
        if ($die)
            die();
    }

    public function Show($data, $die = true)
    {
        echo $data;
        if ($die)
            die();
    }

    public $ip;

    public function __construct()
    {
        load_lib("GetIp");
        $this->ip = get_ip();
    }

}