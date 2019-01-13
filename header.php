<?php
    $themeRoot = get_template_directory_uri();
    $siteRoot = get_site_url() . "/hfkui";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HFK Wordpress Template</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=$themeRoot?>/assets/Bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$themeRoot?>/assets/Bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="<?=$themeRoot?>/assets/Bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="<?=$themeRoot?>/assets/FontAwesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?=$themeRoot?>/style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="<?=$themeRoot?>/assets/JQuery/jquery-3.3.1.min.js"></script>
        <script src="<?=$themeRoot?>/assets/Bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="pageheader border-bottom">
            <div class="content-container h-100">
                <div class="pageheader-navbar">
                    <div class="pageheader-logo">
                        <img src="<?=$themeRoot?>/assets/HFKLogo1.png" class="pageheader-logo-primary">
                        <img src="<?=$themeRoot?>/assets/HFKLogo2.png" class="pageheader-logo-secondary">
                    </div>
                    <div class="pageheader-menu-lg text-bold">
                        <a class="mx-1" href="<?=$siteRoot?>">Home</a>
                        <a class="mx-1" href="<?=$siteRoot?>/events">Events</a>
                        <a class="mx-1" href="<?=$siteRoot?>/ministries">Ministries</a>
                        <a class="mx-1" href="<?=$siteRoot?>/bulletin">Bulletin</a>
                        <a class="mx-1" href="<?=$siteRoot?>/bec">BEC</a>
                        <a class="ml-1" href="<?=$siteRoot?>/calendar">Calendar</a>
                    </div>
                    <div class="pageheader-menu-sm">
                        <a href="#" class="fs-130pc" data-toggle="modal" data-target="#SmallMenu">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div>    
            </div>
        </div>
        
        <div class="pagecontent pageheader-clearfix">