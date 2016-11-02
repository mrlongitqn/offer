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
use models\SessionsModel;
use models\UsersModel;

class UsersController extends BaseController
{
    public $curl;
    public $sessionModel;

    public function __construct()
    {
        load_model("UsersModel");
        $this->model = new UsersModel();
        load_model("SessionsModel");
        $this->sessionModel = new SessionsModel();
        load_lib("curl");
        $this->curl = new  \cURL(true, false);
    }

    public function invoke()
    {
        switch ($_GET['a']) {
            case 'register':
                $error = "Please fill form";
                if (isset($_GET['ref']))
                    $_SESSION['ref'] = $_GET['ref'];
                if (isset($_POST['username'])) {
                    $ref = isset($_SESSION['ref']) ? $_SESSION['ref'] : '';
                    $rg = $this->model->Register($_POST, $ref);
                    if ($rg !== true) {
                        $error = $rg;
                        $data_f = $_POST;
                        include(APP_PATH . 'views/user/register.php');
                    } else {
                        redirect_page(BASE_URL . 'register_success.php');
                    }
                } else {
                    $data_f['username'] = "";
                    $data_f['fullname'] = "";
                    $data_f['email'] = "";
                    $data_f['mobilephone'] = "";
                    include(APP_PATH . 'views/user/register.php');
                }
                break;
            case 'registerApp':
                $rs = $this->model->Register($_POST, '');
                if ($rs == true) {
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
                        $getVersion = str_replace(" ", "", $gConfig[3]['value']);
                        $version = explode(",", $getVersion);
                        $session_expired = $gConfig[4]['value'];
                        if ($this->model->CountIp($this->ip) > $ip_limit) {
                            $data->success = false;
                            $data->errorMessage = "Ip limit";
                        }

                        if (!in_array($_POST['version'], $version)) {
                            $data->success = false;
                            $data->errorMessage = "Version not accept";
                        }
                        if ($this->model->CountGmail($_POST["google_account"]) > $gmail_limit) {
                            $data->success = false;
                            $data->errorMessage = "Gmail limit";
                        }
                        $url = "http://ip-api.com/json/" . $this->ip;
                        // $ip_data = json_decode($this->curl->get($url));
                        $ip_data['countryCode'] = 'vn';
                        if ($ip_data['countryCode'] != $_POST['country']) {
                            $data->success = false;
                            $data->errorMessage = "Country/language wrong";
                        }
                        $deviceLogin = $this->model->GetDeviceLogin($mem['id']);
                        if (!isset($deviceLogin)) {
                            //Insert
                        }
                        //create link active
                        $guid = $this->sessionModel->CreateLinkActive($mem['id'], $deviceLogin['id'], $this->ip, $session_expired);
                        $data->success = true;

                        $data->data = BASE_URL . 'index.php?c=Users&a=active&code=' . $guid;
                        echo json_encode($data);
                    } else
                        echo json_encode(new BaseResult(false, 'User or password not match'));
                }
                break;
            case "active":
                if (isset($_GET['code'])) {
                    $active = $this->sessionModel->ActiveLink($_GET['code']);
                    if (isset($active)) {
                        $deviceLogin = $this->model->GetDeviceLogin($active->member_id);
                        $mem = $this->model->GetMemInfo($active->member_id);
                        $_SESSION['expired'] = time() + ($active->expired_minutes * 60);
                        $_SESSION['code'] = $_GET['code'];
                        $_SESSION['data'] = json_encode($deviceLogin);
                        $_SESSION['member'] = json_encode($mem);
                    }
                    header("Location: " . BASE_URL);
                }
                header("Location: " . BASE_URL);
                break;
            case 'balance':
                $this->RefreshSession();
                $balance = $this->member->balance;
                echo $balance;
            default:
                echo json_encode(new BaseResult(false, 'ERROR'));
                break;
        }
    }
}