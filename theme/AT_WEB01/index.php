<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

  <script>
    new WOW().init();
  </script>

<div class="bannerWrap">
    <img src="<?php echo G5_THEME_IMG_URL ?>/main/banner1.png">
    <div>
        <img class="wow fadeInDown" data-wow-delay="0s" src="<?php echo G5_THEME_IMG_URL ?>/main/banner_logo.png">
        <h2 class="wow fadeInDown" data-wow-delay="0.3s">fleur</h2>
        <p class="wow fadeInDown" data-wow-delay="0.6s">fleur은 고객님의 상황에 맞추어<span>분위기와 싱그러움을 선사합니다.</span></p>
        <div class="square_bracket1 wow fadeInLeft" data-wow-delay="0.1s"></div>
        <div class="square_bracket2 wow fadeInRight" data-wow-delay="0.1s"></div>
    </div>
</div>
<div class="aboutWrap">
   <div class="box inner">
        <div class="main_title">
            <h2 class="wow fadeInDown" data-wow-delay="0.3s"><span>오늘의</span>특가</h2>
            <p class="wow fadeInDown" data-wow-delay="0.4s">시간</p>
        </div>
        <div class="detail">
            <ul class="clearfix">
                <li class="first wow bounceInUp" data-wow-delay="0.5s">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/theme/AT_WEB01/skin/latest/today_deal/snadersonia.png">
                    <p>오렌지색 종모양이 특별한 꽃,</p>
                    <p>샌더소니아</p>
                    <strong><span>14,<span class="number" data-max="506" data-vel="6">700</span></span>원</strong>
                </li>
                <li class="second wow bounceInUp" data-wow-delay="0.5s">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/theme/AT_WEB01/skin/latest/today_deal/alstromeria.png">
                    <p>남아메리카를 닮은 아름다움,</p>
                    <p>알스트로메리아</p>
                    <strong><span>13,<span class="number" data-max="766" data-vel="1">600</span></span>원</strong>
                </li>
                <li class="third wow bounceInUp" data-wow-delay="0.5s">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/theme/AT_WEB01/skin/latest/today_deal/gentian.png">
                    <p>신비로운 푸른빛을 담은,</p>
                    <p>용담초</p>
                    <strong><span>15,<span class="number" data-max="106" data-vel="30">500</span></span>원</strong>
                </li>                                 
            </ul>
        </div>
    </div>
</div>

<div class="coreComWrap">
   <div class="box inner">
        <div class="main_title">
            <h2 class="wow fadeInDown" data-wow-delay="0.3s"><span>MD's pick</span></h2>
            <!-- <p class="wow fadeInDown" data-wow-delay="0.4s">앞서가는 트랜드와 끊임없이 발전해가는 골뱅이커뮤니케이션입니다.</p> -->
        </div>
        <div class="detail">
            <ul class="clearfix">
                <li class="wow bounceInUp" data-wow-delay="0.5s">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/main/coreCom_icon1.png">
                    <strong>보랏빛 밤 믹스</strong>
                    <p>27,000원</p>
                    <a href=""></a>
                    <img src="" alt="">
                </li>
                <li class="second wow bounceInUp" data-wow-delay="0.6s">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/main/coreCom_icon2.png">
                    <strong>어텀믹스</strong>
                    <p>24,000원</p>
                </li>
                <li class="wow bounceInUp" data-wow-delay="0.7s">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/main/coreCom_icon3.png">
                    <strong>화이트 블루 믹스</strong>
                    <p>15,000원</p>
                </li>       
                <li class="second wow bounceInUp" data-wow-delay="0.8s">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/main/coreCom_icon3.png">
                    <strong>펫피투게더 믹스</strong>
                    <p>19,000원</p>
                </li>                           
            </ul>
        </div>
    </div>
</div>


<div class="portfolioWrap">
    <div class="inner">
        <div class="main_title">
            <h2 class="wow fadeInDown" data-wow-delay="0.3s"><span>fleur instagram</span></h2>
            <!-- <p class="wow fadeInDown" data-wow-delay="0.4s">앞서가는 트렌드와 끊임없이 발전해가는 골뱅이커뮤니케이션입니다.</p> -->
        </div>
        <div class="latest_wr wow bounceInUp" data-wow-delay="0.4s">
            <?php echo latest('theme/AT_WEB01/img/fluer_instagram/@6ss---.png', 6, 0, 300,300);?>
        </div>
        <div class="latest_wr2 wow bounceInUp" data-wow-delay="0.4s">
            <?php echo latest('theme/AT_WEB01/img/fluer_instagram/@bau---.png', 6, 0, 300,300);?>
        </div>
        <div class="latest_wr2 wow bounceInUp" data-wow-delay="0.4s">
            <?php echo latest('theme/AT_WEB01/img/fluer_instagram/@con---.png', 6, 0, 300,300);?>
        </div>
        <div class="latest_wr2 wow bounceInUp" data-wow-delay="0.4s">
            <?php echo latest('theme/AT_WEB01/img/fluer_instagram/@gar---.png', 6, 0, 300,300);?>
        </div>
        <div class="latest_wr2 wow bounceInUp" data-wow-delay="0.4s">
            <?php echo latest('theme/AT_WEB01/img/fluer_instagram/@jw_---.png', 6, 0, 300,300);?>
        </div>
        <div class="latest_wr2 wow bounceInUp" data-wow-delay="0.4s">
            <?php echo latest('theme/AT_WEB01/img/fluer_instagram/@sho---.png', 6, 0, 300,300);?>
        </div>
        <div class="latest_wr2 wow bounceInUp" data-wow-delay="0.4s">
            <?php echo latest('theme/AT_WEB01/img/fluer_instagram/@soo---.png', 6, 0, 300,300);?>
        </div>
        <div class="latest_wr2 wow bounceInUp" data-wow-delay="0.4s">
            <?php echo latest('theme/AT_WEB01/img/fluer_instagram/@sua---.png', 6, 0, 300,300);?>
        </div>
        <div class="latest_wr2 wow bounceInUp" data-wow-delay="0.4s">
            <?php echo latest('theme/AT_WEB01/img/fluer_instagram/@tjd---.png', 6, 0, 300,300);?>
        </div>
        <!-- <div class="port_go">
            <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=at01_gallery">포트폴리오 더보기</a>
        </div> -->
    </div>

</div>
<div class="consertWrap">
   <div class="box inner">
        <div class="main_title">
            <h2 class="wow fadeInDown" data-wow-delay="0.3s"><span>fleur</span>class</h2>
        </div>
        <div class="latest_wr wow bounceInUp" data-wow-delay="0.4s">
            <div class="ing_projects">
                <?php echo latest('theme/basic', 'fleur_class', 6, 24, 1);?>
            </div>
            
            <div class="news wow bounceInUp" data-wow-delay="0.5s">
                <?php echo latest('theme/basic', 'fleur_class', 6, 24, 2);?>
            </div>
        </div>
    </div>
</div>
<div class="contactWrap">
    <div class="box inner">
        <div class="main_title">
            <h2 class="wow fadeInDown" data-wow-delay="0.3s"><span>CONTACT</span>US</h2>
            <p class="wow fadeInDown" data-wow-delay="0.4s">골뱅이커뮤니케이션으로 찾아오시는 길을 안내해드립니다.</p>
        </div>
        <div class="detail">
            <div id="daumRoughmapContainer1556788142621" class="root_daum_roughmap root_daum_roughmap_landing wow bounceInUp" style="width:100%;"></div>
            <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
            <script charset="UTF-8">
                new daum.roughmap.Lander({
                    "timestamp": "1556788142621",
                    "key": "tcr4",
                }).render();
            </script>
        </div>
    </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>