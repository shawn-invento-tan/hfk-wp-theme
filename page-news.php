<?php
    get_header();
    $eventWriteupFilters = array("category_name"=>"news");
    $eventWriteupArray = get_posts($eventWriteupFilters);
?>
<div class="content-container py-5">
    <h1 class="text-bold text-center">News</h1>
    <h5 class="text-center mb-4">Find out the latest news and stories in Holy Family Kajang</h5>
    <div class="row justify-content-between">
        <div class="col-lg-8 col-md-7 col-sm-12 col-12 col-bottom-fix">
            <?php
                if($eventWriteupArray){
                    foreach($eventWriteupArray as $eventWriteup) : setup_postdata($eventWriteup);
                        $postTitle= $eventWriteup -> post_title;
                        $postContent = $eventWriteup -> post_content;
                        $postExcerpt = $eventWriteup -> post_excerpt;
                        $authorFirstName =  get_the_author_meta("first_name");
                        $authorLastName = get_the_author_meta("last_name");
                        $postAuthor = trim("$authorFirstName $authorLastName");
                        $postDate = get_the_date('d/m/Y', $eventWriteup -> ID);
                        $postURL = get_permalink($eventWriteup -> ID);
                        $thumbNailID = get_post_thumbnail_id($eventWriteup -> ID);
                        $croppedThumbnailSrc=wp_get_attachment_image_src($thumbNailID,"aspect-ratio-1-1")[0];
                        $postThumbnail = get_the_post_thumbnail($eventWriteup -> ID,'aspect-ratio-1-1');
                        include("template-parts/news-item-template.php");
                    endforeach;
                }
            ?>
            <!--<div class="event-item">
                <div class="event-thumbnail">
                    <div class="aspect-ratio-1-1 bg-dark">

                    </div>
                </div>
                <div class="event-description">

                </div>
            </div>
            <div class="event-item">
                <div class="event-thumbnail">
                    <div class="aspect-ratio-1-1 bg-dark">

                    </div>
                </div>
                <div class="event-description">
                    
                </div>
            </div>
            <div class="event-item">
                <div class="event-thumbnail">
                    <div class="aspect-ratio-1-1 bg-dark">

                    </div>
                </div>
                <div class="event-description">
                    
                </div>
            </div>-->
            <!---<div class="d-flex border-top" style="padding-top:1rem;padding-bottom:1rem">
                <div class="event-thumbnail" style="min-width:120px;">
                    <div class="aspect-ratio-1-1 bg-dark"></div>
                </div>
                <div class="event-description flex-grow-1" style="padding-left:1rem;padding-right:1rem">
                    <a href="#">
                        <h5 class="text-bold">First Holy Communion</h5>
                    </a>
                    <p>
                        This is a super duper long expert. ladidad hakdligf asdhkaj hajksljgfja jaghdkjsd
                    </p>
                    <div class="fs-85pc">By Shaw</div>
                </div>
            </div>
            <div class="d-flex border-top" style="padding-top:1rem;padding-bottom:1rem">
                <div class="event-thumbnail" style="width:120px;">
                    <div class="aspect-ratio-1-1 bg-dark"></div>
                </div>
                <div class="event-description flex-grow-1" style="padding-left:1rem;padding-right:1rem">
                    <a href="#">
                        <h5 class="text-bold">Event Description</h5>

                    </a>
                </div>
            </div>--->
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 col-12 col-bottom-fix text-lg-left text-md-left text-sm-center text-center">
            <h5 class="text-bold">Want to submit your article?</h5>
            <p>
                Email your article to us at <b>hfk.socialcomm@gmail.com</b>
            </p>
            <p>
            
            </p>
        </div>
    </div>            
</div>
<?php
    get_footer();
?>