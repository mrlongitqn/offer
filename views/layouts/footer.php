<section class="clearfix section-full">
    <footer class="clearfix footer js-footer">
        <ul class="clearfix footer-link">
            <li class="footer-link-item is-active js-tab-menu-target" data-tab="home">
                <a href="#">
                    <i class="icons_discover"></i>
                    <span class="text">Discover</span>
                </a>
            </li>
            <li class="footer-link-item js-tab-menu-target" data-tab="share">
                <a href="#">
                    <i class="icons_share"></i>
                    <span class="text">Share</span>
                </a>
            </li>
            <li class="footer-link-item js-tab-menu-target" data-tab="reward">
                <a href="#">
                    <i class="icons_reward"></i>
                    <span class="text">Reward</span>
                </a>
            </li>
            <li class="footer-link-item js-tab-menu-target" data-tab="setting">
                <a href="#">
                    <i class="icons_setting_bt"></i>
                    <span class="text">Setting</span>
                </a>
            </li>
        </ul>
    </footer>
</section>
</div>
<script type="text/javascript" src="<?php echo BASE_URL ?>public/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>public/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>public/js/main.js"></script>
<script>
    var selectTab = 'offer';
    $('#tab_video').click(function () {
        selectTab = 'video';
    });
    $('#tab_offer').click(function () {
        selectTab = 'offer';
    });
    $('#tab_survey').click(function () {
        selectTab = 'survey';
    });
    //Using for offer
    var offer_page = 1; //track user scroll as page number, right now page number is 1
    var loading_offer = false; //prevents multiple loads
    //load_offer();
    LoadOfferApi();
    $("#tab-discover").scroll(function () { //detect page scroll
        if ($("#tab-discover").scrollTop() + $("#tab-discover").innerHeight() >= this.scrollHeight - 100  && selectTab === 'offer') { //if user scrolled to bottom of the page
            load_offer(); //load content
        }
    });
    function load_offer() {
        if (loading_offer == false) {
            loading_offer = true;  //set loading_offer flag on
            $('#loading_offer-info').show(); //show loading_offer animation
            $.post('index.php?c=Offer&a=loadmore', {'page': offer_page, 'type': '1'}, function (data) {
                 //set loading_offer flag off once the content is loaded
                if (data.trim().length == 0) {
                    loading_offer = true;
                    //notify user if nothing to load
                    $('#loading_offer-info').show();
                    $('#loading_offer-info').html("No more records!");
                    return;
                }
                loading_offer = false;
                $('#loading_offer-info').hide(); //hide loading_offer animation once data is received
                $("#ul_offer").append(data); //append data into #results element
                offer_page++; //page number increment
            }).fail(function (xhr, ajaxOptions, thrownError) { //any errors?
                console.log(thrownError);
            })
        }
    }
    function LoadOfferApi() {
            $('#loading_offer-info').show(); //show loading_offer animation
            $.post('index.php?c=Offer&a=api', function (data) {
                //set loading_offer flag off once the content is loaded
                if (data.trim().length == 0) {
                    $('#loading_offer-info').show();
                    return;
                }
                $('#loading_offer-info').hide(); //hide loading_offer animation once data is received
                $("#ul_offer").append(data); //append data into #results element
            }).fail(function (xhr, ajaxOptions, thrownError) { //any errors?
                console.log(thrownError);
            })
        }
    //Using for survey
    var survey_page = 1; //track user scroll as page number, right now page number is 1
    var loading_survey = false; //prevents multiple loads
    load_survey();
    $("#tab-discover").scroll(function () { //detect page scroll
        if ($("#tab-discover").scrollTop() + $("#tab-discover").innerHeight() >= this.scrollHeight - 100  && selectTab === 'survey') { //if user scrolled to bottom of the page
            load_survey(); //load content
        }
    });
    function load_survey() {
        if (loading_survey == false) {
            loading_survey = true;  //set loading_survey flag on
            $('#loading_survey-info').show(); //show loading_survey animation
            $.post('index.php?c=Offer&a=loadmore', {'page': survey_page, 'type': '2'}, function (data) {
                //set loading_survey flag off once the content is loaded
                if (data.trim().length == 0) {
                    loading_survey = true;
                    //notify user if nothing to load
                    $('#loading_survey-info').show();
                    $('#loading_survey-info').html("No more records!");
                    return;
                }
                loading_survey = false;
                $('#loading_survey-info').hide(); //hide loading_survey animation once data is received
                $("#ul_survey").append(data); //append data into #results element
                survey_page++; //page number increment
            }).fail(function (xhr, ajaxOptions, thrownError) { //any errors?
                console.log(thrownError);
            })
        }
    }
    //Using for video
    var video_page = 1; //track user scroll as page number, right now page number is 1
    var loading_video = false; //prevents multiple loads
    load_video();
    $("#tab-discover").scroll(function () { //detect page scroll
        if ($("#tab-discover").scrollTop() + $("#tab-discover").innerHeight() >= this.scrollHeight - 100  && selectTab === 'video') { //if user scrolled to bottom of the page
            load_video(); //load content
        }
    });
    function load_video() {
        if (loading_video == false) {
            loading_video = true;  //set loading_video flag on
            $('#loading_video-info').show(); //show loading_video animation
            $.post('index.php?c=Offer&a=loadmore', {'page': video_page, 'type': '2'}, function (data) {
                //set loading_video flag off once the content is loaded
                if (data.trim().length == 0) {
                    loading_video = true;
                    //notify user if nothing to load
                    $('#loading_video-info').show();
                    $('#loading_video-info').html("No more records!");
                    return;
                }
                loading_video = false;
                $('#loading_video-info').hide(); //hide loading_video animation once data is received
                $("#ul_video").append(data); //append data into #results element
                video_page++; //page number increment
            }).fail(function (xhr, ajaxOptions, thrownError) { //any errors?
                console.log(thrownError);
            })
        }
    }
</script>
</body>
</html>