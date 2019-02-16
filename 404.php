<?php
    get_header();
    $siteRoot=get_site_url();
?>
<div class="content-container py-5 text-center">
    <h1 class="text-bold mb-4">We're sorry. The page you are looking for does not exist</h1>
    <div>
        <a href="<?=$siteRoot?>" class="btn btn-lg btn-outline-secondary">GO BACK HOME</a>
    </div>
</div>
<?php
    get_footer();
?>