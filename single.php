<?php
    get_header();
    $displayPost=true;
    if(have_posts()){
        while(have_posts()){
            the_post();
            if(has_category("front_page_events")){
                $displayPost=false;
            }
            $pagetitle=get_the_title();
            $pagecontent=get_the_content();
        }
    }
?>
<?php if($displayPost == true):?>
    <div class="content-container py-5">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 col-bottom-fix">
                <h1 class="text-bold mb-4"><?=$pagetitle?></h1>
                <?=$pagecontent?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-bottom-fix">
                <h5>Found this interesting? Here's more</h5>
            </div>
        </div>
    </div>
<?php else:?>
    <div class="content-container py-5 text-center">
        <h3 class="text-bold">
            We're sorry. The post you are looking for does not exist or has expired.
        </h3>
        <h5>Here's some other ones you might be interested in</h5>
    </div>
<?php endif;?>
<?php
    get_footer();
?>