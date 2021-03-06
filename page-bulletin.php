<?php
    get_header();
    $announcementFilters = array("category_name"=>"bulletin","order"=>"ASC","posts_per_page"=>"200");
    $announcementArray = get_posts($announcementFilters);
    
    $englishBulletin = GetBulletin("Bulletin_EN");
    if($englishBulletin=="#"){
        $englishHref="";
        $englishBtnType="btn-outline-danger text-danger";
        $englishButtonText="NOT AVAILABLE";
        $englishDownload="";
    }
    else{
        $englishHref="href=\"".$englishBulletin."\"";
        $englishBtnType="btn-outline-secondary";
        $englishButtonText="DOWNLOAD";
        $englishDownload="download";
    }

    $tamilBulletin = GetBulletin("Bulletin_TM");
    if($tamilBulletin=="#"){
        $tamilHref="";
        $tamilBtnType="btn-outline-danger text-danger";
        $tamilButtonText="NOT AVAILABLE";
        $tamilDownload="";
    }
    else{
        $tamilHref="href=\"".$tamilBulletin."\"";
        $tamilBtnType="btn-outline-secondary";
        $tamilButtonText="DOWNLOAD";
        $tamilDownload="download";
    }

    $mandarinBulletin = GetBulletin("Bulletin_MND");
    if($mandarinBulletin=="#"){
        $mandarinHref="";
        $mandarinBtnType="btn-outline-danger text-danger";
        $mandarinButtonText="NOT AVAILABLE";
        $mandarinDownload="";
    }
    else{
        $mandarinHref="href=\"".$mandarinBulletin."\"";
        $mandarinBtnType="btn-outline-secondary";
        $mandarinButtonText="DOWNLOAD";
        $mandarinDownload="download";
    }

    $bmBulletin = GetBulletin("Bulletin_BM");
    if($bmBulletin=="#"){
        $bmHref="";
        $bmBtnType="btn-outline-danger text-danger";
        $bmButtonText="NOT AVAILABLE";
        $bmDownload="";
    }
    else{
        $bmHref="href=\"".$bmBulletin."\"";
        $bmBtnType="btn-outline-secondary";
        $bmButtonText="DOWNLOAD";
        $bmDownload="download";
    }
?>
<div class="content-container py-5">
    <h1 class="text-bold text-center mb-4">Bulletin</h1>
    <div class="row justify-content-between">
        <div class="col-lg-8 col-md-7 col-sm-12 col-12 col-bottom-fix">
            
            <?php
                if($announcementArray){
                    foreach($announcementArray as $announcement) : setup_postdata($announcement);
                        $postTitle= $announcement -> post_title;
                        $postContent = $announcement -> post_content;
                        include("template-parts/post-content-bulletin.php");
                    endforeach;
                }
            ?>
            <!---<div class="alert alert-success text-center">
                There are no announcements
            </div>--->
            <!---<div class="bulletin-block mb-4">
                <h3 class="bulletin-header">Pongal Celebration</h3>
                <div class="bulletin-body">
                    The Tamil Apostolate is organizing a Pongal Celebration on <b>20/1/2019 from 5pm to 9pm</b>.
                    In conjunction with this the team is looking for sponsorship and 
                    selling lucky draw coupons at the Book Barrow to raise funds and they are seeking donations for the Banana leaf dinner that day. Kindly support them
                </div>
                <div class="bulletin-footer" style="font-size:90%">
                    Posted on 1/1/2019
                </div>
                <hr>
            </div>
            <div class="bulletin-block mb-4">
                <h3 class="bulletin-header">Pongal Celebration</h3>
                <div class="bulletin-body">
                    The Tamil Apostolate is organizing a Pongal Celebration on <b>20/1/2019 from 5pm to 9pm</b>.
                    In conjunction with this the team is looking for sponsorship and 
                    selling lucky draw coupons at the Book Barrow to raise funds and they are seeking donations for the Banana leaf dinner that day. Kindly support them
                </div>
                <div class="bulletin-footer" style="font-size:90%">
                    Posted on 1/1/2019
                </div>
                <hr>
            </div>--->
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 col-12 col-bottom-fix text-lg-left text-md-left text-sm-center text-center">
            <h5 class="text-bold mb-3">Get your copy</h5>
            <div class="list-group mb-4 text-bold">
                <a <?=$englishHref?> target="_blank" <?=$englishDownload?> class="list-group-item">English</a>
                <a <?=$tamilHref?> target="_blank" <?=$tamilDownload?> class="list-group-item">Tamil</a>
                <a <?=$mandarinHref?> target="_blank" <?=$mandarinDownload?> class="list-group-item">Mandarin</a>
                <a <?=$bmHref?> target="_blank" <?=$bmDownload?> class="list-group-item">Bahasa Malaysia</a>
            </div>
            <h5 class="text-bold mb-2">Have something to post?</h5>
            <p>
                Email your bulletin post to us at <b>hfk.socialcomm@gmail.com</b>
            </p>
        </div>
    </div>
</div>
<?php
    get_footer();
?>