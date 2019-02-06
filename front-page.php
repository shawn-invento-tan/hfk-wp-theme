<?php
    get_header();
    $newsFilters = array("category_name"=>"news","posts_per_page"=>4);
    $newsArray = get_posts($newsFilters);
    $siteRoot = get_site_url();
    $themeRoot= get_template_directory_uri();
    
    $englishBulletin = GetBulletin("Bulletin_EN");
    if($englishBulletin=="#"){
        $englishHref="";
        $englishBtnType="btn-outline-danger text-danger";
        $englishButtonText="NOT AVAILABLE";
    }
    else{
        $englishHref="href=\"".$englishBulletin."\"";
        $englishBtnType="btn-outline-secondary";
        $englishButtonText="DOWNLOAD";
    }
    
    $tamilBulletin = GetBulletin("Bulletin_TM");
    if($tamilBulletin=="#"){
        $tamilHref="";
        $tamilBtnType="btn-outline-danger text-danger";
        $tamilButtonText="NOT AVAILABLE";
    }
    else{
        $tamilHref="href=\"".$tamilBulletin."\"";
        $tamilBtnType="btn-outline-secondary";
        $tamilButtonText="DOWNLOAD";
    }

    $mandarinBulletin = GetBulletin("Bulletin_MND");
    if($mandarinBulletin=="#"){
        $mandarinHref="";
        $mandarinBtnType="btn-outline-danger text-danger";
        $mandarinButtonText="NOT AVAILABLE";
    }
    else{
        $mandarinHref="href=\"".$mandarinBulletin."\"";
        $mandarinBtnType="btn-outline-secondary";
        $mandarinButtonText="DOWNLOAD";
    }
    
    $bmBulletin = GetBulletin("Bulletin_BM");
    if($bmBulletin=="#"){
        $bmHref="";
        $bmBtnType="btn-outline-danger text-danger";
        $bmButtonText="NOT AVAILABLE";
    }
    else{
        $bmHref="href=\"".$bmBulletin."\"";
        $bmBtnType="btn-outline-secondary";
        $bmButtonText="DOWNLOAD";
    }

?>
<div id="Slider" style="position:relative">
    <div>
        <img src="<?=$themeRoot?>/assets/churchimg2.jpg" class="w-100"/>
    </div>
    <div style="position:absolute;top:0;left:0;right:0;bottom:0;background-color:rgba(0,0,0,0.5)"></div>
    <div style="position:absolute;top:0;left:0;right:0;bottom:0;display:flex;align-items:center;text-align:center">
        <div class="content-container text-white">
            <div>
                <img src="<?=$themeRoot?>/assets/HFKLogoOnly.png" alt="HFK Primary Logo" class="church-banner-img" style="width:20%">
            </div>
            <h1 class="text-bold slider-header"><span style="font-size:50%">CHURCH OF THE</span><br>HOLY FAMILY<br>KAJANG</h1>
            <div class="d-lg-block d-md-block d-sm-none d-none mt-4">
                <a href="https://www.google.com.my/maps/place/Church+of+The+Holy+Family+(1899)/@2.988675,101.7883941,17z/data=!3m1!4b1!4m5!3m4!1s0x31cdcb838c6da811:0xa716824c78151353!8m2!3d2.988675!4d101.7905828?hl=en&authuser=0" class="btn btn-lg btn-lawrencium">FIND US</a>
                <a href="#" id="MassTimesButton" class="btn btn-lg btn-lawrencium">MASS TIMES</a>
            </div>
        </div>
    </div>
</div>
<!--<div id="Slider" class="py-5 bg-gradient-lawrencium text-white">
    <div class="content-container text-center">
        <h1 class="text-bold mb-4">
            HOLY FAMILY KAJANG
        </h1>
        <div>
            <a href="#" class="btn btn-lg btn-lawrencium">FIND US</a>
            <a href="#" class="btn btn-lg btn-lawrencium">MASS TIMES</a>
        </div>
    </div>
</div>-->
<div id="MassTimes" class="py-5 border-top">
    <div class="content-container text-center">
        <h2 class="text-bold mb-4">Mass Times</h2>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-bottom-fix">
                <h4 class="text-bold">Saturday</h4>
                <div>
                    <span class="text-bold">7:00am</span> Mass in English
                </div>
                <div>
                    <span class="text-bold">6:00pm</span> Mass in English
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-bottom-fix">
                <h4 class="text-bold">Sunday</h4>
                <div>
                    <span class="text-bold">7:00am</span> Mass in Tamil
                </div>
                <div>
                    <span class="text-bold">9:00am</span> Mass in English
                </div>
                <div>
                    <span class="text-bold">11:00am</span> Mass in Mandarin
                </div>
                <div>
                    <span class="text-bold">1:00pm</span> Mass in Bahasa Malaysia
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-bottom-fix">
                <h4 class="text-bold">Weekdays</h4>
                <div>
                    <span class="text-bold">7:00am</span> Mass in English
                </div>
            </div>
        </div>
    </div>
</div>
<div id="Ministries" class="py-5 bg-light border-top">
    <div class="content-container text-center">
        <h2 class="text-bold">Clusters</h2>
        <h4 class="mb-4">Interested to serve the Church? Find your calling here.</h4>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 col-bottom-fix">
                <div class="card front-page-card hoverable goto">
                    <div class="card-img-top aspect-ratio-16-9 bg-dark">
                        <img src="<?=$themeRoot?>/assets/bec.jpg">
                    </div>
                    <div class="card-body">
                        <a href="<?=$siteRoot?>/bec">Basic Ecclesial Communities (BEC)</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 col-bottom-fix">
                <div class="card front-page-card hoverable goto">
                    <div class="card-img-top aspect-ratio-16-9 bg-dark">
                        <img src="<?=$themeRoot?>/assets/socialcomm.jpg">
                    </div>
                    <div class="card-body">
                        <a href="<?=$siteRoot?>/clusters">Social Comm</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 col-bottom-fix">
                <div class="card front-page-card hoverable goto">
                    <div class="card-img-top aspect-ratio-16-9 bg-dark">
                        <img src="<?=$themeRoot?>/assets/formation.jpg">
                    </div>
                    <div class="card-body">
                        <a href="<?=$siteRoot?>/clusters">Formation</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="content-container text-center">
        <a href="<?=$siteRoot?>/clusters" class="btn btn-outline-secondary btn-lg">FIND A CLUSTER</a>
    </div>
</div>
<div id="RecentEvents" class="py-5 border-top">
    <div class="content-container text-center">
        <h2 class="text-bold mb-4">Latest News</h2>
        <div class="row justify-content-center">
            <?php
                if($newsArray){
                    foreach($newsArray as $newsItem) : setup_postdata($newsItem);
                        $postTitle = $newsItem -> post_title;
                        $postURL = get_permalink($newsItem -> ID);
                        $postThumbnailURL = get_the_post_thumbnail_url($newsItem -> ID);
                        include("template-parts/event-item-front-page.php");
                    endforeach;
                }
            ?>
        </div>
        <div class="text-center">
            <a href="<?=$siteRoot?>/news" class="btn btn-lg btn-outline-secondary">MORE NEWS</a>
        </div>
    </div>
</div>
</div>
<div id="Bulletins" class="bg-light py-5 border-top">
    <div class="content-container text-center">
        <h2 class="text-bold">Bulletins</h2>
        <h4 class="mb-4">Stay updated with the latest events</h4>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 col-bottom-fix">
                <h5 class="text-bold">English</h5>
                <div>
                    <a <?=$englishHref?> target="_blank" class="btn <?=$englishBtnType?>"><?=$englishButtonText?></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 col-bottom-fix">
                <h5 class="text-bold">Tamil</h5>
                <div>
                    <a <?=$tamilHref?> target="_blank" class="btn <?=$tamilBtnType?>"><?=$tamilButtonText?></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 col-bottom-fix">
                <h5 class="text-bold">Mandarin</h5>
                <div>
                    <a <?=$mandarinHref?> target="_blank" class="btn <?=$mandarinBtnType?>"><?=$mandarinButtonText?></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 col-bottom-fix">
                <h5 class="text-bold">Bahasa Malaysia</h5>
                <div>
                    <a <?=$bmHref?> target="_blank" class="btn <?=$bmBtnType?>"><?=$bmButtonText?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>