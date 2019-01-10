<?php
    $themeRoot = "/hfkui/wp-content/themes/hfk/";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HFK Wordpress Template</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=$themeRoot?>assets/Bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$themeRoot?>assets/Bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="<?=$themeRoot?>assets/Bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="<?=$themeRoot?>assets/FontAwesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?=$themeRoot?>style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="<?=$themeRoot?>assets/JQuery/jquery-3.3.1.min.js"></script>
        <script src="<?=$themeRoot?>assets/Bootstrap/js/bootstrap.min.js"></script>
        <style>
            
        </style>
        <script>
            $(document).ready(function(){
                ResizePageHeader();
                $(window).on("scroll",function(){
                    ResizePageHeader();
                })
            })
            function ResizePageHeader(){
                var scrollTop = $(document).scrollTop();
                var pageHeaderHeight = $(".pageheader").outerHeight();
                if(scrollTop > 40){
                    $(".pageheader").outerHeight(60);
                }
                else{
                    $(".pageheader").outerHeight(100 - scrollTop);
                    
                }
            }
        </script>
    </head>
    <body>
        <div class="pageheader border-bottom">
            <div class="content-container h-100">
                <div class="pageheader-navbar">
                    <div class="pageheader-logo">
                        <img src="/hfk/assets/HFKLogo.png">
                    </div>
                    <div class="pageheader-menu-lg text-bold">
                        <a class="mx-1" href="/hfk/index.html">Home</a>
                        <a class="mx-1" href="/hfk/events.html">Events</a>
                        <a class="mx-1" href="/hfk/ministries.html">Ministries</a>
                        <a class="mx-1" href="#">Bulletin</a>
                        <a class="mx-1" href="#">BEC</a>
                        <a class="ml-1" href="/hfk/calendar.html">Calendar</a>
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