<?php
    get_header();
    $currentPriestsFilter = array("category_name"=>"currentpriests");
    $currentPriestsArray = get_posts($currentPriestsFilter);
    $pastPriestsFilter = array("category_name"=>"pastpriests");
    $pastPriestsArray = get_posts($pastPriestsFilter);
?>
<div class="content-container py-5">
    <h1 class="text-bold text-center mb-4">Our Priests</h1>
    <div class="row justify-content-center mb-4">
        <?php
            if($currentPriestsArray){
                foreach($currentPriestsArray as $currentPriest) : setup_postdata($currentPriest);
                    $postTitle=$currentPriest -> post_title;
                    $postThumbnail=get_the_post_thumbnail($currentPriest->ID,"aspect-ratio-1-1");
                    $postThumbnailURL=get_the_post_thumbnail_url($currentPriest -> ID);
                    $thumbNailID = get_post_thumbnail_id($currentPriest -> ID);
                    $croppedThumbnailSrc=wp_get_attachment_image_src($thumbNailID,"aspect-ratio-1-1")[0];
                    $postURL = get_permalink($currentPriest -> ID);
                    $hasThumbnail = has_post_thumbnail($currentPriest -> ID);
                    $postExcerpt=$currentPriest -> post_excerpt;
                    include("template-parts/priest-card.php");
                endforeach;
            }
        ?>
        <!---<div class="col-lg-3 col-md-3 col-sm-6 col-12 col-bottom-fix">
            <div class="card front-page-card hoverable">
                <div class="card-img-top aspect-ratio-1-1 bg-dark">
                    <img src="https://scontent.fkul14-1.fna.fbcdn.net/v/t1.0-9/50480647_2076899925726962_3330878950594314240_n.jpg?_nc_cat=109&_nc_ht=scontent.fkul14-1.fna&oh=3c0eb9a160211b437095f03943ae0c48&oe=5CB5A06B">
                </div>
                <div class="card-body">
                Fr. Andrew Kooi
                </div>
            </div>
        </div>--->
    </div>

        
    <h2 class="text-bold text-center mb-4">Past Priests</h2>
    <div class="row justify-content-center">
        <?php
            if($pastPriestsArray){
                foreach($pastPriestsArray as $pastPriest) : setup_postdata($pastPriest);
                    $postTitle=$pastPriest -> post_title;
                    $postThumbnail=get_the_post_thumbnail($pastPriest->ID,"aspect-ratio-1-1");
                    $postThumbnailURL=get_the_post_thumbnail_url($pastPriest -> ID);
                    $thumbNailID = get_post_thumbnail_id($pastPriest -> ID);
                    $croppedThumbnailSrc=wp_get_attachment_image_src($thumbNailID,"aspect-ratio-1-1")[0];
                    $postURL = get_permalink($pastPriest -> ID);
                    $hasThumbnail = has_post_thumbnail($pastPriest -> ID);
                    $postExcerpt=$pastPriest -> post_excerpt;
                    include("template-parts/priest-card.php");
                endforeach;
            }
        ?>
    </div>
</div>
<?php
    get_footer();
?>