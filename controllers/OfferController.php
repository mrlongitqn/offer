<?php
/**
 * Created by PhpStorm.
 * User: LongND
 * Date: 10/21/2016
 * Time: 11:44 PM
 */

namespace controllers;


use models\OfferModel;

class OfferController extends BaseController
{

    public function __construct()
    {
        load_model("OfferModel");
        $this->model = new OfferModel();
    }

    public function invoke()
    {
        $action = !empty($_GET['a']) ? $_GET['a'] : '';
        switch ($action) {
            case "loadmore":
                $page = $_POST["page"];
                $type = $_POST["type"];
                $position = (($page - 1) * PAGE_SIZE);
                $result = $this->model->Offer($type, $position, PAGE_SIZE, 'id', '1');
                foreach ($result as $item) {
                    ?>
                    <a href="<?= $item['offer_link'] ?>" target="_blank">
                        <li class="clearfix article-item">
                            <div class="left">
                                <img class="img-full" src="<?= $item['offer_img'] ?>"/>
                            </div>
                            <div class="center">
                                <h4 class="title"><?= $item['offer_name'] ?></h4>
                                <p class="summary"><?= $item['offer_des'] ?></p>
                                <p class="sub"></p>
                            </div>
                            <div class="right">
                                <div class="item">
                                    <i class="icons_number"><?= $item['payout'] ?></i>
                                </div>
                                <div class="item">
                                    <i class="icons_special"><img src="<?= $item['icon'] ?>"></i>
                                </div>
                            </div>
                        </li>
                    </a>
                    <?php
                }
                break;
            default:
                load_header();
                include(APP_PATH . 'views/offer/offer.php');
                load_footer();
                break;
        }

    }
}