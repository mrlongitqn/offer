<?php
/**
 * Created by PhpStorm.
 * User: LongND
 * Date: 10/23/2016
 * Time: 11:07 PM
 */

namespace models;

use libraries\Utils;

class SessionsModel extends BaseModel
{
   public function CreateLinkActive($mem, $device, $ip, $expired)
   {
       load_lib("Utils");
       $guId = Utils::CreateGUID();
      $sql = "INSERT INTO sessions(active_code, member_id, device_login_id, ip, expired_minutes, is_actived, created_time)".
" VALUES('$guId','$mem', '$device', '$ip', '$expired', 0,UNIX_TIMESTAMP())";
      $r = $this->db->query($sql);
       if($r->rowCount()!=0)
           return $guId;
       return '';
   }

    public function ActiveLink($guid){
        $sql = "UPDATE sessions SET is_actived = 1 WHERE active_code = '$guid'";
        $r = $this->db->query($sql);
        if($r->rowCount()!=0)
        {
            $sql = "SELECT * FROM sessions WHERE active_code='$guid'";
            $r = $this->db->query($sql);
            return $r->fetchObject();
        }
        return null;
    }
}