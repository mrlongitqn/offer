<?php
/**
 * Created by PhpStorm.
 * User: LongND
 * Date: 10/21/2016
 * Time: 11:45 PM
 */

namespace models;


class OfferModel extends BaseModel
{

    public function Offer($type, $start, $limit, $order, $status)
    {
        $sql = "SELECT * FROM (SELECT * FROM has_offers WHERE status = '$status' AND type='$type' ORDER BY $order DESC LIMIT $start,$limit ) AS T1 LEFT JOIN (SELECT * FROM nets) AS T2 ON T1.net_id = T2.id";
        $commad = $this->db->prepare($sql);
        $commad->execute();

        $result = $commad->fetchAll();
        return $result;
    }

    public function Nets($net_id)
    {
        $sql = "SELECT * FROM nets
                WHERE id= $net_id";
        $commad = $this->db->prepare($sql);
        $commad->execute();
        $result = $commad->fetch();
        return $result;
    }
}