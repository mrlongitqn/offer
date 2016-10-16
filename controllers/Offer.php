<?php

load_model('m_offer');
$offer = Offer(1,0, 6);
$suvery=Offer(1,0,6);
$video=  Offer(1,0,6);
load_header();
include(APP_PATH . 'views/offer/offer.php');
load_footer();
