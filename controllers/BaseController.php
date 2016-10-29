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


use models\UsersModel;

class BaseController
{
    public $model;
    public $active_code;
    public $member;
    public $device_login;
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

    public function CheckSession(){
        if(isset($_SESSION['code']) && isset($_SESSION['expired'])) {
            if (time() > $_SESSION['expired']) {
                session_destroy();
                header("Location: ".NotLoginLink);
            }
            $this->active_code= $_SESSION['code'];
        }else{
            header("Location: ".NotLoginLink);
        }

    }

    public function GenMemInfo(){
        if(isset($_SESSION['code']) && isset($_SESSION['expired'])) {
            if (time() > $_SESSION['expired']) {
                session_destroy();
                header("Location: ".NotLoginLink);
            }
        }
        $this->member = json_decode($_SESSION['member']);
    }

    public function GenDeviceLoginInfo(){
        if(isset($_SESSION['code']) && isset($_SESSION['expired'])) {
            if (time() > $_SESSION['expired']) {
                session_destroy();
                header("Location: ".NotLoginLink);
            }
        }
        $this->device_login= json_decode($_SESSION['data']);
    }

    public function RefreshSession(){
        if(isset($_SESSION['code']) && isset($_SESSION['expired'])) {
            if (time() > $_SESSION['expired']) {
                session_destroy();
                header("Location: ".NotLoginLink);
            }
        }
        $member = json_decode($_SESSION['member']);
        load_model('UsersModel');
        $usermodel = new UsersModel();
        $deviceLogin = $usermodel->GetDeviceLogin($member->id);
        $mem = $usermodel->GetMemInfo($member->id);
        $_SESSION['data'] = json_encode($deviceLogin);
        $_SESSION['member'] = json_encode($mem);
    }

    public function RedirectLink($url){
        header("Location: ".$url);
    }

    public function ShowView($view)    {
        
    }
}