<?php
    function Offer($type,$start,$limit){
        global $db;
        $sql = "SELECT * FROM 	has_offers
                Where type =$type
                limit $start,$limit";
        $commad =$db->prepare($sql);
        $commad->execute();
        $result =$commad->fetchAll();
        return $result;
    }
    function Nets($net_id){
        global $db;
        $sql = "SELECT * FROM nets
                WHERE id= $net_id";
        $commad =$db->prepare($sql);
        $commad->execute();
        $result =$commad->fetch();
        return $result;
    }