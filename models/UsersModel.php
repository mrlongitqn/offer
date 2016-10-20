<?php
/**
 * Create by Long ND
 * Create date: 20/10/2016 16:32
 * Info:
 * Webs: http://nguyenduclong.com - https://www.facebook.com/mrlongitqn
 * Mobile: 0962112102 - 01222444992
 * Skype - Yahoo - GMail: mrlong.itqn
 */

namespace models;

class UsersModel extends BaseModel
{
    public function Register($data){
        if($this->CheckUser($data['username']))
            return 'Email exist';
        if($this->CheckPhone($data["mobilephone"]))
            return 'Mobile phone exist';
        if ($this->CheckEmail($data["email"]))
            return 'Email exist';
        $sql = "INSERT INTO member(username, password, fullname, gender, dateofbirth, mobilephone, email,balance, group_id, role)".
            " VALUES ('".$data['username']."', '".$data['password']."', '".$data['fullname']."','".$data['gender']."','".$data['dateofbirth']."','".$data['mobilephone']."','".$data['email']."','0','3','0')";
        $commad =$this->db->prepare($sql);
        $commad->execute();
       return  $commad->rowCount()==1;
    }
    
    
    private function CheckUser($username){
        $r = $this->db->query("SELECT * FROM member WHERE username='$username'");
        return $r->rowCount()==0;
    }
    private function CheckEmail($mail){
        $r = $this->db->query("SELECT * FROM member WHERE username='$mail'");
        return $r->rowCount()==0;
    }
    private function CheckPhone($phone){
        $r = $this->db->query("SELECT * FROM member WHERE username='$phone'");
        return $r->rowCount()==0;
    }

    public function Login($username, $password)
    {
        $r = $this->db->query("SELECT * FROM member WHERE username='$username' AND password='$password'");
        if ($r->rowCount()==0)
            return null;
        return $r->fetch(2);
    }

    public function GetUser($userId){
        $sql = "SELECT * FROM users WHERE member_id='$userId'";
        $r = $this->db->query($sql);
        if ($r->rowCount()==0)
            return false;
        return $r->fetch(2);
    }


    public function CheckKernel($kernel)
    {
        $sql = "SELECT * FROM blacklist_kernel WHERE kernel='$kernel'";
        $r = $this->db->query($sql);
        return $r->rowCount()==0;
    }

    public function CountIp($ip)
    {
        $r = $this->db->query("SELECT COUNT(*) as count FROM users WHERE ip_address='$ip'");
        return $r->fetch(2)["count"];
    }
    
    public function CountGmail($gmail)
    {
        $r = $this->db->query("SELECT COUNT(*) as count FROM users WHERE google_account='$gmail'");
        return $r->fetch(2)["count"];
    }

    public function GetConfig(){
       $data = $this->db->query("SELECT * FROM config");
        return $data->fetchAll(2);
    }

    public function InsertInfoLogin($data){
        $sql = "INSERT ";
    }
}