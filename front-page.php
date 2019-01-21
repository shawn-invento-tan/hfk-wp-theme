<?php
    get_header();
    $pastEventFilters = array("category_name"=>"front_page_events");
    $pastEventsArray = get_posts($pastEventFilters);
    $siteRoot = get_site_url();
    $themeRoot= get_template_directory_uri();
?>
<div id="Slider" style="position:relative">
    <div>
        <img src="<?=$themeRoot?>/assets/churchimg2.jpg" class="w-100"/>
    </div>
    <div style="position:absolute;top:0;left:0;right:0;bottom:0;background-color:rgba(0,0,0,0.5)"></div>
    <div style="position:absolute;top:0;left:0;right:0;bottom:0;display:flex;align-items:center;text-align:center">
        <div class="content-container text-white">
            <div>
                <img src="<?=$themeRoot?>/assets/HFKLogoWhite.png" alt="HFK Primary Logo" class="church-banner-img w-25">
            </div>
            <div class="d-lg-block d-md-block d-sm-none d-none mt-4">
                <a href="#" class="btn btn-lg btn-lawrencium">FIND US</a>
                <a href="#" class="btn btn-lg btn-lawrencium">MASS TIMES</a>
            </div>
        </div>
    </div>
</div>
<!--<div id="Slider" class="py-5 bg-gradient-lawrencium text-white">
    <div class="content-container text-center">
        <h1 class="text-bold mb-4">
            HOLY FAMILY KAJANG
        </h1>
        <div>
            <a href="#" class="btn btn-lg btn-lawrencium">FIND US</a>
            <a href="#" class="btn btn-lg btn-lawrencium">MASS TIMES</a>
        </div>
    </div>
</div>-->
<div id="MassTimes" class="py-5 border-top">
    <div class="content-container text-center">
        <h2 class="text-bold mb-4">Mass Times</h2>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-bottom-fix">
                <h4 class="text-bold">Saturday</h4>
                <div>
                    <span class="text-bold">7:00am</span> Mass in English
                </div>
                <div>
                    <span class="text-bold">6:00pm</span> Mass in English
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-bottom-fix">
                <h4 class="text-bold">Sunday</h4>
                <div>
                    <span class="text-bold">7:00am</span> Mass in Tamil
                </div>
                <div>
                    <span class="text-bold">6:00pm</span> Mass in English
                </div>
                <div>
                    <span class="text-bold">7:00am</span> Mass in Mandarin
                </div>
                <div>
                    <span class="text-bold">6:00pm</span> Mass in Bahasa Malaysia
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-bottom-fix">
                <h4 class="text-bold">Weekdays</h4>
                <div>
                    <span class="text-bold">7:00am</span> Mass in English
                </div>
            </div>
        </div>
    </div>
</div>
<div id="Ministries" class="py-5 bg-light border-top">
    <div class="content-container text-center">
        <h2 class="text-bold">Clusters</h2>
        <h4 class="mb-4">Interested to serve the Church? Find your calling here.</h4>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 col-bottom-fix">
                <div class="card front-page-card hoverable goto">
                    <div class="card-img-top aspect-ratio-16-9 bg-dark">
                        
                    </div>
                    <div class="card-body">
                        <a href="<?=$siteRoot?>/ministries/catechetical">Formation</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 col-bottom-fix">
                <div class="card front-page-card hoverable goto">
                    <div class="card-img-top aspect-ratio-16-9 bg-dark">

                    </div>
                    <div class="card-body">
                        <a href="<?=$siteRoot?>">Youth</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 col-bottom-fix">
                <div class="card front-page-card hoverable goto">
                    <div class="card-img-top aspect-ratio-16-9 bg-dark">

                    </div>
                    <div class="card-body">
                        <a href="<?=$siteRoot?>">Integral Human Development</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="content-container text-center">
        <a href="<?=$siteRoot?>/ministries" class="btn btn-outline-secondary btn-lg">FIND A CLUSTER</a>
    </div>
</div>
<div id="RecentEvents" class="py-5 border-top">
    <div class="content-container text-center">
        <h2 class="text-bold mb-4">Recent Events</h2>
        <div class="row justify-content-center">
            <?php
                if($pastEventsArray){
                    foreach($pastEventsArray as $pastEvent) : setup_postdata($pastEvent);
                        the_content();
                    endforeach;
                }
            ?>
            <!---<div class="col-lg-6 col-md-6 col-sm-12 col-12 col-bottom-fix">
                <div class="card front-page-card hoverable">
                    <div class="card-img-top aspect-ratio-16-9 bg-light">
                        <img src="/hfk/assets/firstholycommunion.jpg">
                    </div>
                    <div class="card-body text-bold">
                        First Holy Communion 2018
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 col-bottom-fix">
                <div class="card rounded-0">
                    <div class="card-img-top aspect-ratio-16-9 bg-light">
                        <img src="/hfk/assets/firstholycommunion.jpg">
                    </div>
                    <div class="card-body text-bold">
                        First Holy Communion 2018
                    </div>
                </div>
            </div>--->
            <!---<div class="col-lg-6 col-md-6 col-sm-12 col-12 col-bottom-fix">
                <div class="card rounded-0">
                    <div class="card-img-top aspect-ratio-16-9 bg-light">
                        <img src="/hfk/assets/firstholycommunion.jpg">
                    </div>
                    <div class="card-body text-bold">
                        First Holy Communion 2018
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 col-bottom-fix">
                <div class="card rounded-0">
                    <div class="card-img-top aspect-ratio-16-9 bg-light">
                        <img src="/hfk/assets/parishpastoralassembly.jpeg">
                    </div>
                    <div class="card-body text-bold">
                        Parish Pastoral Assembly 2018
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 col-bottom-fix">
                <div class="card rounded-0">
                    <div class="card-img-top aspect-ratio-16-9 bg-light">
                        <img src="/hfk/assets/migrantsunday.png">
                    </div>
                    <div class="card-body">
                        Migrant Sunday 2018
                    </div>
                </div>
            </div>--->
        </div>
        <div class="text-center">
            <a href="<?=$siteRoot?>events" class="btn btn-lg btn-outline-secondary">MORE EVENTS</a>
        </div>
    </div>
</div>
</div>
<div id="Bulletins" class="bg-light py-5 border-top">
    <div class="content-container text-center">
        <h2 class="text-bold">Bulletins</h2>
        <h4 class="mb-4">Stay updated with the latest events</h4>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 col-bottom-fix">
                <h5 class="text-bold">English</h5>
                <div>
                    <a href="#" target="_blank" class="btn btn-outline-secondary">DOWNLOAD</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 col-bottom-fix">
                <h5 class="text-bold">Tamil</h5>
                <div>
                    <a href="#" target="_blank" class="btn btn-outline-secondary">DOWNLOAD</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 col-bottom-fix">
                <h5 class="text-bold">Mandarin</h5>
                <div>
                    <a href="#" target="_blank" class="btn btn-outline-secondary">DOWNLOAD</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 col-bottom-fix">
                <h5 class="text-bold">Bahasa Malaysia</h5>
                <div>
                    <a href="#" target="_blank" class="btn btn-outline-secondary">DOWNLOAD</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>