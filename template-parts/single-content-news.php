<?php
    $randomPostsFilter = array("post_type"=>"post","orderby"=>"rand","posts_per_page"=>5,"category_name"=>"news");
    $randomPosts= new WP_Query($randomPostsFilter);
?>
<div class="content-container py-5">
    <div class="row justify-content-between">
        <div class="col-lg-8 col-md-8 col-sm-12 col-12 col-bottom-fix">
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
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-bottom-fix">
            <h5 class="text-bold mb-3">Found this interesting? Here's more</h5>
            <div class="list-group rounded-0">
            <?php
                if($randomPosts->posts){
                    foreach($randomPosts->posts as $randomPost){
                        $randomPostTitle=$randomPost->post_title;
                        $randomPostURL=get_permalink($randomPost->ID);
                        $randomPostHasThumbnail = has_post_thumbnail($randomPost -> ID);
                        $randomPostThumbnailURL=get_the_post_thumbnail_url($randomPost -> ID);
                        $randomPostThumbnailID = get_post_thumbnail_id($randomPost -> ID);
                        $randomPostCroppedThumbnailSrc=wp_get_attachment_image_src($randomPostThumbnailID,"aspect-ratio-1-1")[0];
                        $useDefaultThumbnail = true;
                        include("random-thumbnail-post.php");
                    }
                }
            ?>
            </div>
        </div>
    </div>
</div>