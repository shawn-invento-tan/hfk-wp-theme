<?php
    $themeRoot = get_template_directory_uri();
?>
<div class="d-flex flex-row py-2 border-top">
<div style="min-width:75px">
    <div class="aspect-ratio-1-1 bg-dark">
        <?php if($randomPostHasThumbnail):?>
            <img src="<?=$randomPostCroppedThumbnailSrc?>" class="w-100">
        <?php else:?>
            <img src="<?=$themeRoot?>/assets/not-available.png" class="w-100">
        <?php endif;?>
    </div>
</div>
<div class="flex-grow-1 px-3 text-bold text-decoration-none goto">
    <a href="<?=$randomPostURL?>"><?=$randomPostTitle?></a>
</div>
</div>