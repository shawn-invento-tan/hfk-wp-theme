<?php
    if(have_posts()){
        while(have_posts()){
            the_post();
            $pagetitle=get_the_title();
            $pagecontent=get_the_content();
        }
    }
?>
<div class="content-container py-5">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-12 col-bottom-fix text-justify">
            <h1 class="text-bold mb-4"><?=$pagetitle?></h1>
            <?=$pagecontent?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <h5 class="text-bold">More you might be interested in</h5>
        </div>
    </div>
</div>