<?php
    get_header();
    $pastEventFilters = array("category_name"=>"front_page_events");
    $pastEventsArray = get_posts($pastEventFilters);
?>
<div id="Slider" class="py-5 bg-gradient-lawrencium text-white">
    <div class="content-container text-center">
        <h1 class="text-bold mb-4">Welcome to Holy Family Kajang</h1>
        <div>
            <a href="#" class="btn btn-lg btn-lawrencium">FIND US</a>
            <a href="#" class="btn btn-lg btn-lawrencium">MASS TIMES</a>
        </div>
    </div>
</div>
<div id="MassTimes" class="py-5">
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
<div id="Ministries" class="py-5 bg-light">
    <div class="content-container text-center">
        <h2 class="text-bold">Ministries</h2>
        <h4 class="mb-4">Interested to serve the Church? Find your calling here.</h4>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 col-bottom-fix">
                <div class="card front-page-card hoverable">
                    <div class="card-img-top aspect-ratio-16-9 bg-dark">
                        
                    </div>
                    <div class="card-body">
                        Catechetical
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 col-bottom-fix">
                <div class="card front-page-card hoverable">
                    <div class="card-img-top aspect-ratio-16-9 bg-dark">

                    </div>
                    <div class="card-body">
                        Family Life
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 col-bottom-fix">
                <div class="card front-page-card hoverable">
                    <div class="card-img-top aspect-ratio-16-9 bg-dark">

                    </div>
                    <div class="card-body">
                        Legion of Mary
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 col-bottom-fix">
                <div class="card front-page-card hoverable">
                    <div class="card-img-top aspect-ratio-16-9 bg-dark">

                    </div>
                    <div class="card-body">
                        Liturgical
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-container text-center">
        <a href="<?=$siteRoot?>/ministries" class="btn btn-outline-secondary btn-lg">FIND A MINISTRY</a>
    </div>
</div>
<div id="RecentEvents" class="py-5">
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
            <a href="<?=$siteRoot?>events" class="btn btn-lg btn-outline-secondary">FIND OUT MORE</a>
        </div>
    </div>
</div>
</div>
<div id="Bulletins" class="bg-light py-5">
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