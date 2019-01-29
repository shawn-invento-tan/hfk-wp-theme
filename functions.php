<?php
    function AddThumbnailSupport(){
        add_theme_support("post-thumbnails");
        add_image_size('aspect-ratio-1-1', 140, 140, true);
        
    }
    add_action("after_setup_theme","AddThumbnailSupport");
    function LoopThroughPosts($postArray,$displayTemplatePath){

    }
    function GetBulletin($bulletinName){
        $bulletinFilter = array(
            'post_type'      => 'attachment',
            'post_mime_type' => 'application/pdf',
            'post_status'    => 'inherit',
            'posts_per_page' => 1,
            's' => $bulletinName
        );
        
        $availableBulletins = new WP_Query( $bulletinFilter );
        $URL="#";
        if($availableBulletins->posts){
            foreach ( $availableBulletins->posts as $bulletin ) {
                $URL = wp_get_attachment_url( $bulletin->ID );
            }
        }
        return $URL;
        /*$bulletins = array();
        foreach ( $availableBulletins->posts as $bulletin ) {
            var_dump($image);
            $images[] = wp_get_attachment_url( $image->ID );
        }*/
    }
?>