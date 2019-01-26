<?php
    get_header();
    $displayPost=true;
    $siteRoot=get_site_url();
    if(have_posts()){
        while(have_posts()){
            the_post();
            $pagetitle=get_the_title();
            $pagecontent=get_the_content();
            if(has_category("front_page_events")){
                $displayPost=false;
                include("template-parts/single-content-none.php");
            }
            else if(has_category("event_writeup")){
                include("template-parts/single-content-event-writeup.php");
            }
            else if (has_category("currentpriests") || has_category("pastpriests")){
                include("template-parts/priest-about.php");
            }
            else{
                include("template-parts/single-content-default.php");
            }
        }
    }
?>

<?php
    get_footer();
?>