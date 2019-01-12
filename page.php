<?php
    get_header();
    if(is_page() and $post -> post_parent == 0){
        // If this is the parent page, show the default content page
        include("template-parts/page-content-default.php");
    }
    else{
        // If this is the child page, show the customized child page template if any. otherwise show the default layout
        $postParent = get_post($post -> post_parent);
        $postParentSlug = $postParent -> post_name;
        
        if($postParentSlug == "ministries"){
            include("template-parts/page-content-ministry-info.php");
        }
        else{
            include("template-parts/page-content-default.php");
        }
    }
    get_footer();
?>