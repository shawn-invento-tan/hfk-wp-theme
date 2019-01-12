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
    <?=$pagecontent?>
</div>