<?php
/**
 * Create by Long ND
 * Create date: 20/10/2016 21:34
 * Info:
 * Webs: http://nguyenduclong.com - https://www.facebook.com/mrlongitqn
 * Mobile: 0962112102 - 01222444992
 * Skype - Yahoo - GMail: mrlong.itqn
 */

namespace controllers;


use models\BaseResult;
use models\UsersModel;

class UsersController extends BaseController
{

    public $model;
    public $curl;

    public function __construct()
    {
        load_model("UsersModel");
        load_lib("curl");
        $this->curl = new  \cURL(true,false);
        $this->model = new UsersModel();
    }

    public function invoke()
    {
        switch ($_GET['a']) {
            case 'register':
                $rs = $this->model->Register($_POST);
                if ($rs) {
                    $data = new BaseResult(true, $_POST);
                    $data->Show();
                } else {
                    $data = new BaseResult(false, $rs);
                    $data->Show();
                }

                break;

            case 'login':
                if (isset($_POST)) {
                    $u = $_POST['username'];
                    $p = $_POST['password'];
                    $mem = $this->model->Login($u, $p);
                    $data = new BaseResult();
                    if (isset($mem)) {
                        if (!$this->model->CheckKernel($_POST['kernel'])) {
                            $data->success = false;
                            $data->errorMessage = "Kernel block";
                            $data->Show();
                        }
                        $gConfig = $this->model->GetConfig();
                        $ratio = $gConfig[0]['value'];
                        $ip_limit = $gConfig[1]['value'];
                        $gmail_limit = $gConfig[2]['value'];
                        $getVersion = str_replace(" ","",$gConfig[3]['value']);
                        $version = explode(",", $getVersion);
                        if($this->model->CountIp($this->ip)>$ip_limit)
                        {
                            $data->success = false;
                            $data->errorMessage = "Ip limit";
                        }

                        if(!in_array($_POST['version'], $version)){
                            $data->success = false;
                            $data->errorMessage = "Version not accept";
                        }
                        if($this->model->CountGmail($_POST["google_account"])>$gmail_limit)
                        {
                            $data->success = false;
                            $data->errorMessage = "Gmail limit";
                        }
                        $url = "http://ip-api.com/json/".$this->ip;
                        $ip_data = json_decode($this->curl->get($url));
                        if($ip_data['countryCode']!=$_POST['country'])
                        {
                            $data->success = false;
                            $data->errorMessage = "Country/language wrong";
                        }
                        $user = $this->model->GetUser($mem['id']);

                        echo json_encode($user);
                    } else
                        echo json_encode(new BaseResult(false, 'User or password not match'));
                }
                break;
            default:
                echo 'k co';
        }
    }
}