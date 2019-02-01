<div class="col-lg-3 col-md-3 col-sm-6 col-12 col-bottom-fix">
    <div class="card h-100 priest-card goto">
        <div class="card-img-top hoverable border rounded-0">
            <?php if($hasThumbnail):?>
                <div class="aspect-ratio-1-1 bg-light">
                    <img src="<?=$postThumbnailURL?>" class="w-100">
                </div>
            <?php else:?>
                <div class="aspect-ratio-1-1 bg-light"></div>
            <?php endif;?>
        </div>
        <div class="card-body">
            <div class="text-bold">
                <a href="<?=$postURL?>"><?=$postTitle?></a>
            </div>
            <div>
                <?=$postExcerpt?>
            </div>
        </div>
    </div>
</div>