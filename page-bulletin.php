<?php
    get_header();
    $announcementFilters = array("category_name"=>"bulletin");
    $announcementArray = get_posts($announcementFilters);
?>
<div class="content-container py-5">
    <h1 class="text-bold text-center mb-4">Bulletin</h1>
    <div class="row justify-content-between">
        <div class="col-lg-8 col-md-8 col-sm-12 col-12 col-bottom-fix">
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
        <div class="col-lg-3 col-md-3 col-sm-12 col-12 col-bottom-fix text-lg-left text-md-left text-sm-center text-center">
            <h5 class="text-bold mb-2">Get your copy</h5>
            <div class="list-group mb-4">
                <a href="#" class="list-group-item">English</a>
                <a href="#" class="list-group-item">Tamil</a>
                <a href="#" class="list-group-item">Mandarin</a>
                <a href="#" class="list-group-item">Bahasa Malaysia</a>
            </div>
            <h5 class="text-bold mb-2">Have something to post?</h5>
            <div>
                Send us an email at with the title and content of the post.
            </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>