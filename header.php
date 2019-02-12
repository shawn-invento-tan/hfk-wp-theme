<?php
    $themeRoot = get_template_directory_uri();
    $siteRoot = get_site_url();
    if(is_front_page()){
        $pageTitle="Holy Family Church Kajang";
        $pageDescription="Welcome to the official site asdasdof Holy Family Church Kajang.";
    }
    else{
        $pageTitle=get_the_title();
        $pageDescription="";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?=$pageTitle?></title>
        <meta name="description" keywords="">
        <meta 
            name="keywords" 
            content="holy,family,church,kajang,selangor,malaysia,hfc,hfk,parish,parishoners,events,ministry,ministries,clusters,activities,sunday,school,mass,times,schedule,kuala lumpur archdiocese,christian,bm,mandarin,tamil,kajang parish,gereja,katolik,rcia,svdp">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?=$themeRoot?>/assets/HFKLogo1.png">
        <link rel="stylesheet" href="<?=$themeRoot?>/assets/Bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$themeRoot?>/assets/Bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="<?=$themeRoot?>/assets/Bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="<?=$themeRoot?>/assets/FontAwesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?=$themeRoot?>/style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="<?=$themeRoot?>/assets/JQuery/jquery-3.3.1.min.js"></script>
        <script src="<?=$themeRoot?>/assets/Bootstrap/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".goto").on("click",function(){
                    var location = $(this).find("a").attr("href");
                    window.location.href=location;
                })
                $("#MassTimesButton").on("click",function(){
                    var scrollHeight=$("#Slider").outerHeight();
                    $("html,body").animate({
                        scrollTop:scrollHeight+2
                    },"slow");
                })
                $("#ContactUsForm").on("submit",function(){
                    var Name = this.Name.value;
                    var Email = this.Email.value;
                    var PhoneNumber = this.PhoneNumber.value;
                    var Feedback = this.Feedback.value;
                    var Data = {
                        "Name":Name,
                        "Email":Email,
                        "PhoneNumber":PhoneNumber,
                        "Feedback":Feedback
                    };
                    var Href = $(this).attr("action");
                    $.post(Href,Data,function(data){
                        
                    })

                    

                    return false;
                })
            })
        </script>
    </head>
    <body>
        <input type="hidden" id="siteRoot" value="<?=$siteRoot?>">
        <div id="PageHeader" class="pageheader border-bottom">
            <div class="content-container h-100">
                <div class="pageheader-navbar">
                    <div class="pageheader-logo">
                        <a href="<?=$siteRoot?>"><img src="<?=$themeRoot?>/assets/HFKLogo1.png" alt="HFK Primary Logo" class="pageheader-logo-primary"></a>
                        <a href="<?=$siteRoot?>"><img src="<?=$themeRoot?>/assets/HFKLogo2.png" alt="HFK Secondary Logo" class="pageheader-logo-secondary"></a>
                    </div>
                    <div class="pageheader-menu-lg text-bold">
                        <a class="mx-2" href="<?=$siteRoot?>">Home</a>
                        <a class="mx-2" href="<?=$siteRoot?>/news">News</a>
                        <a class="mx-2" href="<?=$siteRoot?>/clusters">Clusters</a>
                        <a class="mx-2" href="<?=$siteRoot?>/bulletin">Bulletin</a>
                        <a class="mx-2" href="<?=$siteRoot?>/bec">BEC</a>
                        <a class="mx-2" href="<?=$siteRoot?>/calendar">Calendar</a>
                        <a class="mx-2" href="<?=$siteRoot?>/forms">Forms</a>
                        <a class="ml-2" href="<?=$siteRoot?>/contact-us">Contact Us</a>
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