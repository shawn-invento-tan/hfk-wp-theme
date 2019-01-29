<?php
    get_header();
    $becFilter = array("category_name"=>"becinfo","order"=>"ASC","posts_per_page"=>200);
    $becArray = get_posts($becFilter);
?>
<script>
    $(document).ready(function(){
        $(".bec-card").on("click",function(){
            $(this).siblings(".bec-card").removeClass("opened");
            $(this).toggleClass("opened");
        })
    })
    
</script>
<div class="content-container py-5">
    <h1 class="text-bold text-center mb-4">BEC</h1>
    <div class="list-group">
    <?php
        if($becArray){
            foreach($becArray as $becInfo):setup_postdata($becInfo);
                $postTitle=$becInfo -> post_title;
                $postContent=$becInfo -> post_content;
                include("template-parts/bec-card.php");
            endforeach;
        }
    ?>
    </div>
</div>
<?php
    get_footer();
?>