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
    public $curl;

    public function __construct()
    {
        load_model("OfferModel");
        $this->model = new OfferModel();
        load_lib("curl");
        $this->curl = new  \cURL(true, false);

    }

    public function invoke()
    {
        $this->CheckSession();
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
                //$this->GetOfferWallApp();
                $this->GenMemInfo();
                $this->RefreshSession();
                $user = $this->member;
                include(APP_PATH . 'views/layouts/header.php');
                include(APP_PATH . 'views/offer/offer.php');
                load_footer();
                break;
            case 'api':
                $this->GetOfferWallApp();
                break;
        }

    }

    private function GetOfferWallApp(){
        $url = API_ALL_WALL_URL.'ALL';//$this->mem_info['country'];
        $offer_api =  $this->curl->get($url);
        $offer_api_data = json_decode($offer_api);
        $net = $this->model->Nets(7);
        //$this->Dump($offer_api_data);
        foreach ($offer_api_data->ads as $item) {
            ?>
            <a href="<?= $item->clickurl ?>" target="_blank">
                <li class="clearfix article-item">
                    <div class="left">
                        <img class="img-full" src="<?= $item->icon ?>"/>
                    </div>
                    <div class="center">
                        <h4 class="title"><?= $item->title ?></h4>
                        <p class="summary"><?= $item->description ?></p>
                        <p class="sub"></p>
                    </div>
                    <div class="right">
                        <div class="item">
                            <i class="icons_number"><?= $item->payout ?></i>
                        </div>
                        <div class="item">
                            <i class="icons_special"><img src="<?= $net['icon'] ?>"></i>
                        </div>
                    </div>
                </li>
            </a>
            <?php
        }
    }

}