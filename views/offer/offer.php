 <section class="section-full tab-render-item is-active section-content page-home js-tab-menu-render js-content" data-tab="home">
        <div class="section-switch">
          <ul class="clearfix switch">
            <li class="switch-item js-tab-target is-active" data-tab="offers">
              <i class="icons icons_setting_mn">&nbsp;</i>
              Offers
            </li>
            <li class="switch-item js-tab-target" data-tab="survey">
              <i class="icons icons_survey">&nbsp;</i>
              Survey
            </li>
            <li class="switch-item js-tab-target" data-tab="video">
              <i class="icons icons_video">&nbsp;</i>
              Video
            </li>
          </ul>
        </div>
        <div class="container">
          <div class="banner">
            <img class="img-full" src="<?php echo BASE_URL  ?>public/img/top/banner.png" />
          </div>
          <!-- Slider main container -->
          <div class="swiper-container js-swiper-home">
            <!-- Additional required wrapper -->
            <ul class="swiper-wrapper">
                <!-- Slides -->
                <li class="swiper-slide"><img class="img-full" src="<?php echo BASE_URL  ?>public/img/top/slider_1.png" /></li>
                <li class="swiper-slide"><img class="img-full" src="<?php echo BASE_URL  ?>public/img/top/slider_1.png" /></li>
                <li class="swiper-slide"><img class="img-full" src="<?php echo BASE_URL  ?>public/img/top/slider_1.png" /></li>
            </ul>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
          <ul class="clearfix tab-render">
            <li class="clearfix tab-render-item js-tab-render is-active" data-tab="offers">
              <ul class="clearfix article" id="content">
               <?php
                foreach ($offer as $row_offer) {
                ?>  
                <li class="clearfix article-item">
                  <div class="left">
                    <img class="img-full" src="<?=$row_offer['offer_img']?>" />
                  </div>
                  <div class="center">
                    <h4 class="title"><?=$row_offer['offer_name']?></h4>
                    <p class="summary"><?=$row_offer['offer_des']?></p>
                    <p class="sub"></p>
                  </div>
                  <div class="right">
                    <div class="item">
                      <i class="icons_number">123</i>
                    </div>
                      <?php
                        $net_id=$row_offer['net_id'];
                        $net=  nets($net_id);
                       ?>
                    <div class="item">
                        <i class="icons_special"><img src="<?=$net['icon']?>"></i>
                    </div>
                  </div>
                </li>
                
                <?php 
                    }
                    
                ?>
                
                
                
              </ul>
              
            </li>
            <li class="clearfix tab-render-item js-tab-render" data-tab="survey">
              <ul class="clearfix article">
                  
                <?php
                    foreach ($suvery as $row_suvery) {
                ?>    
                <li class="clearfix article-item">
                  <div class="left">
                    <img class="img-full" src="<?=$row_suvery['offer_img']?>" />
                  </div>
                  <div class="center">
                    <h4 class="title"><?=$row_suvery['offer_name']?></h4>
                    <p class="summary"><?=$row_suvery['offer_des']?></p>
                    <p class="sub">This offer is from oneApp Plus</p>
                  </div>
                  <div class="right">
                    <div class="item">
                      <i class="icons_number">123</i>
                    </div>
                       <?php
                        $net_id=$row_offer['net_id'];
                        $net=  nets($net_id);
                       ?>
                    <div class="item">
                      <i class="icons_special"><img src="<?=$net['icon']?>"></i>
                    </div>
                  </div>
                </li>
                 <?php 
                    }
                ?>
                
                
                
                
                
              </ul>
            </li>
            <li class="clearfix tab-render-item js-tab-render" data-tab="video">
              <ul class="clearfix article">
                  
                 <?php
                    foreach ($video as $row_video) {
                ?>  
                <li class="clearfix article-item">
                  <div class="left">
                    <span class="bg"></span>
                    <i class="video-icon">&nbsp;</i>
                    <img class="img-full" src="<?=$row_video['offer_img']?>" />
                  </div>
                  <div class="center">
                    <h4 class="title"><?=$row_video['offer_name']?></h4>
                    <p class="summary"><?=$row_video['offer_des']?></p>
                  </div>
                  <div class="right">
                    <div class="item">
                      <i class="icons_number">123</i>
                    </div>
                     <?php
                        $net_id=$row_offer['net_id'];
                        $net=  nets($net_id);
                       ?> 
                    <div class="item">
                      <i class="icons_special"><img src="<?=$net['icon']?>"></i>
                    </div>
                  </div>
                </li>
                
                <?php 
                    }
                ?>
                
                
                
                
              </ul>
            </li>
          </ul>  
        </div> 
      </section>
      <!-- End section tab home -->
      <!-- section tab Share -->
      <section class="section-full tab-render-item section-content page-share js-tab-menu-render js-content" data-tab="share">
        <div class="banner-coins">
          <p class="friends">Share with your friends to</p>
          <h4 class="title">[  GET 500 COINS  ]</h4>
          <p class="txt">Your friends  complete an offer on offers app. <br/>You earn 500 coins</p> 
        </div>
        <div class="container">
          <h4 class="txt-center title-code">
            Your code tag
            <span class="sub">(tap on code to copy)</span>
          </h4>
          <div class="widget-code">
            <button class="btn-code" type="button">
              <i class="icons_ticker">&nbsp;</i>
              <span class="txt">fa-qrcode- fa-qrcode</span>
            </button>
          </div>
          <p class="txt-center txt-share">Share your code on:</p>
          <ul class="social-list">
            <li class="social-list-item">
              <a href="#"><i class="icons_facebook">&nbsp;</i></a>
            </li>
            <li class="social-list-item">
              <a href="#"><i class="icons_google">&nbsp;</i></a>
            </li>
            <li class="social-list-item">
              <a href="#"><i class="icons_message_big">&nbsp;</i></a>
            </li>
            <li class="social-list-item">
              <a href="#"><i class="icons_twitter">&nbsp;</i></a>
            </li>
            <li class="social-list-item">
              <a href="#"><i class="icons_mail_social">&nbsp;</i></a>
            </li>
            <li class="social-list-item">
              <a href="#"><i class="icons_zalo">&nbsp;</i></a>
            </li>
          </ul>
        </div> 
      </section>
      <!-- End section tab Share -->
      <!-- section tab Reward -->
      <section class="section-full tab-render-item section-content page-reward js-tab-menu-render js-content" data-tab="reward">
        <p class="top-sub">Redeem $5 Amazon Gift Card</p>
        <div class="container">
          <div class="banner-gift">
            <span class="price">
              $5
            </span>
          </div>
          <div class="txt-center content">
            <p class="txt-coins">It will cost 550 coins to redeem this reward. Please enter your mail address to receive your Amazon gift card</p>
            <form class="form-send">
              <div class="form-item">
                <i class="icon icons_mail">&nbsp;</i>
                <input type="text" name="email" placeholder="enter your email" class="input" />
              </div>
              <div class="widget-btn">
                <button class="btn-black js-modal-target" data-modal="send-mail" type="button">
                  Redeem
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="summary-reuse">
          <h3 class="title">Description</h3>
          <p class="txt"><span class="dot">•</span><span class="sub">please make sure the email your enter above is correct and valid</span></p>
          <p class="txt"><span class="dot">•</span><span class="sub">We’ll transferring your redeemed rewards to your account within 24 hours, please note to check.</span></p>
        </div> 
      </section>
      <!-- End section tab Reward -->
      <!-- section tab Setting -->
      <section class="section-full tab-render-item section-content page-setting js-tab-menu-render js-content" data-tab="setting">
        <div class="container">
          <div class="user">
            <ul class="user-info">
              <li class="user-info-item">
                <div class="avatar">
                  <img alt="avatar" src="../img/top/avatar.png">
                </div>
                <div class="info">
                  <p class="name">Memory No</p>
                  <p>Account: nguyenvanan@gmail.com</p>
                  <p>Referal code: fhgfuykildfhjj</p>
                </div>
                <button class="btn-yellow" type="button">Bind Paypal Account</button>
              </li>
              <li class="user-info-item">
                <div class="txt-right refresh">
                  <i class="icons_refresh_active">&nbsp;</i>
                </div>
                <div class="info">
                  <p>Points Available: 64</p>
                  <p>Total Points Receive: 64</p>
                  <p>Total Points Redeemed: 0</p>
                </div>
                <button class="btn-yellow" type="button">Credit History</button>
              </li>
              <li class="user-info-item">
                <button class="btn-yellow" type="button">User Stream</button>
              </li>
            </ul>
          </div>
          <div class="notification">
            <ul class="notifi-list">
              <li class="notifi-list-item">
                Notification
                <div class="button-switch">
                  <label>
                  <input type="checkbox" class="ios-switch green  bigswitch" checked="">
                  <div>
                    <div>
                      
                    </div>
                  </div>
                  </label>
                </div>
              </li>
              <li class="notifi-list-item">
                <a href="#">
                  Leaderboard
                  <i class="icons_arrow">&nbsp;</i>
                </a>
              </li>
              <li class="notifi-list-item">
                <a href="#">
                  FAQ
                  <i class="icons_arrow">&nbsp;</i>
                </a>
              </li>
              <li class="notifi-list-item">
                <a href="#">
                  Missing Points
                  <i class="icons_arrow">&nbsp;</i>
                </a>
              </li>
              <li class="notifi-list-item">
                <a href="#">
                  Contact Us
                  <i class="icons_arrow">&nbsp;</i>
                </a>
              </li>
              <li class="notifi-list-item">
                <a href="#">
                  Rate Us
                  <i class="icons_arrow">&nbsp;</i>
                </a>
              </li>
              <li class="notifi-list-item">
                <a href="#">
                  Follow Us
                  <i class="icons_arrow">&nbsp;</i>
                </a>
              </li>
              <li class="notifi-list-item">
                <a href="#">
                  Reset password
                  <i class="icons_arrow">&nbsp;</i>
                </a>
              </li>
              <li class="notifi-list-item">
                <a href="#">
                  Notification
                  <i class="icons_arrow">&nbsp;</i>
                </a>
              </li>
            </ul>
          </div>
        </div> 
      </section>
