<?php
    $randomPriestsFilter = array("post_type"=>"post","orderby"=>"rand","posts_per_page"=>5,"category_name"=>"priests");
    $randomPriests= new WP_Query($randomPriestsFilter);
?>
<div class="content-container py-5">
    <div class="row justify-content-between">
        <div class="col-lg-8 col-md-8 col-sm-12 col-12 col-bottom-fix">
            <div class="mb-2">
                <a href="<?=$siteRoot?>/our-priests" class="text-black-50 text-decoration-none">
                    <i class="fa fa-arrow-circle-left"></i>
                    Priests
                </a>
            </div>
            <h1 class="text-bold mb-4"><?=$pagetitle?></h1>
            <div class="text-justify">
                <?=$pagecontent?>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-bottom-fix">
            <h5 class="text-bold mb-3">More Priests</h5>
            <div class="list-group rounded-0">
            <?php
                if($randomPriests->posts){
                    foreach($randomPriests->posts as $randomPriest){
                        $randomPostTitle=$randomPriest->post_title;
                        $randomPostURL=get_permalink($randomPriest->ID);
                        $randomPostHasThumbnail = has_post_thumbnail($randomPriest -> ID);
                        $randomPostThumbnailURL=get_the_post_thumbnail_url($randomPriest -> ID);
                        $randomPostThumbnailID = get_post_thumbnail_id($randomPriest -> ID);
                        $randomPostCroppedThumbnailSrc=wp_get_attachment_image_src($randomPostThumbnailID,"aspect-ratio-1-1")[0];
                        include("random-thumbnail-post.php");
                    }
                }
            ?>
            </div>
        </div>
    </div>
</div>