<div class="col-lg-3 col-md-3 col-sm-6 col-12 col-bottom-fix">
    <div class="card hoverable rounded-0 h-100 priest-card goto">
        <div class="card-img-top">
            <?php if($hasThumbnail):?>
                <img src="<?=$croppedThumbnailSrc?>" class="w-100">
            <?php else:?>
                <div class="aspect-ratio-1-1 bg-light"></div>
            <?php endif;?>
        </div>
        <div class="card-body border-top text-center">
            <div class="text-bold">
                <a href="<?=$postURL?>"><?=$postTitle?></a>
            </div>
            <div>
                <?=$postExcerpt?>
            </div>
        </div>
    </div>
</div>