<?php
    $randomPostsFilter = array("post_type"=>"post","orderby"=>"rand","posts_per_page"=>5,"category_name"=>"news");
    $randomPosts= new WP_Query($randomPostsFilter);
?>
<div class="content-container py-5">
    <div class="row justify-content-between">
        <div class="col-lg-8 col-md-7 col-sm-12 col-12 col-bottom-fix">
            <div class="mb-2">
                <a href="<?=$siteRoot?>/news" class="text-black-50 text-decoration-none">
                    <i class="fa fa-arrow-circle-left"></i>
                    News
                </a>
            </div>
            <h1 class="text-bold mb-4"><?=$pagetitle?></h1>
            <div class="text-justify">
                <?=$pagecontent?>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 col-12 col-bottom-fix">
            <h5 class="text-bold mb-3">Found this interesting? Here's more</h5>
            <div class="list-group rounded-0">
            <?php
                if($randomPosts->posts){
                    foreach($randomPosts->posts as $randomPost){
                        $randomPostTitle=$randomPost->post_title;
                        $random_post_url=get_permalink($randomPost->ID);
                        include("random-post.php");
                    }
                }
            ?>
            </div>
        </div>
    </div>
</div>