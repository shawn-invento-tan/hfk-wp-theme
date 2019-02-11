<?php
    get_header();
    $themeRoot = get_template_directory_uri();
?>
<div class="content-container py-5">
    <h1 class="text-bold text-center mb-4">Contact Us</h1>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 col-bottom-fix text-decoration-none">
            <h5 class="text-bold">Address</h5>
            <p>
                11 Jalan Gereja,
                <br>
                43000 Kajang,
                <br>
                Selangor Darul Ehsan,
                <br>
                Malaysia
                <br>
                <a href="https://www.google.com.my/maps/place/Church+of+The+Holy+Family+(1899)/@2.988675,101.7883941,17z/data=!3m1!4b1!4m5!3m4!1s0x31cdcb838c6da811:0xa716824c78151353!8m2!3d2.988675!4d101.7905828?hl=en&authuser=0" target="_blank">Open in Google Maps</a>
            </p>
            <h5 class="text-bold">Phone Number</h5>
            <p>
                03-87331154
            </p>
            <h5 class="text-bold">Email</h5>
            <p>
                <a href="mailto:hfckajang@gmail.com">hfckajang@gmail.com</a>
            </p>
            <h5 class="text-bold">Social Media</h5>
            <div>
                <a href="https://www.facebook.com/HolyFamilyKajang/" class="btn btn-facebook">
                    <i class="fab fa-facebook-f"></i>
                    Facebook
                </a>
                <a href="https://www.instagram.com/holyfamilykajang/" class="btn btn-instagram">
                    <i class="fab fa-instagram"></i>
                    Instagram
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 col-bottom-fix">
            <h3 class="text-bold">Leave us your feedback or inquiries here</h3>
            <form id="ContactUsForm" method="post" action="<?=$themeRoot?>/api/contact-us.php">
                <div class="form-group">
                    <label class="text-bold">Your Name</label>
                    <input name="Name" type="text" class="form-control rounded-0" placeholder="e.g. John Doe">
                </div>
                <div class="form-group">
                    <label class="text-bold">Your Email</label>
                    <input name="Email" type="text" class="form-control rounded-0" placeholder="e.g. john.doe@email.com">
                </div>
                <div class="form-group">
                    <label class="text-bold">Your Phone Number (optional)</label>
                    <input name="PhoneNumber" type="text" class="form-control rounded-0" placeholder="e.g. 0191234567">
                </div>
                <div class="form-group">
                    <label class="text-bold">Your Feedback/Inquiry</label>
                    <textarea name="Feedback" class="form-control rounded-0" maxlength="255" placeholder="e.g. Holy Family Kajang is awesome"></textarea>
                </div>
                <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="SUBMIT">    
                </div>
                
            </form>
        </div>
    </div>
</div>
<?php
    get_footer();
?>