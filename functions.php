<?php
    function AddThumbnailSupport(){
        add_theme_support("post-thumbnails");
        add_image_size('aspect-ratio-1-1', 100, 100, true);
    }
    add_action("after_setup_theme","AddThumbnailSupport");
?>