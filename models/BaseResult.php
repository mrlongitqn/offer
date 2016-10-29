<?php
/**
 * Create by Long ND
 * Create date: 20/10/2016 22:07
 * Info:
 * Webs: http://nguyenduclong.com - https://www.facebook.com/mrlongitqn
 * Mobile: 0962112102 - 01222444992
 * Skype - Yahoo - GMail: mrlong.itqn
 */

namespace models;

class BaseResult {
    public $success;
    public $errorCode;
    public $errorMessage;
    public $data;

    public function __construct($isSuccess = true, $data=null, $errorMsg='', $errorCode = 0)
    {
        $this->success = $isSuccess;
        $this->data = $data;
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMsg;
    }

    public function Show()
    {
        echo json_encode($this);
        die();
    }

}