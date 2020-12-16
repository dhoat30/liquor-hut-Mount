
<?php
    echo do_shortcode('[mc4wp_form id="595"]');
?>
<!-- START FOOTER -->
<footer class="footer_dark">
	<div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                	<div class="widget">
                        <div class="footer_logo">
                            <a href="/"><img src="<?php echo get_site_url();?>/wp-content/uploads/2020/12/LH-logo-landscape-1.png" alt="logo"/></a>
                        </div>
                        <p> </p>
                    </div>
                    <div class="widget">
                        <ul class="social_icons social_white">
                            <li><a href="https://www.facebook.com/liquorhutotahuhu/"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
        		</div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title">Useful Links</h6>
                              <?php 
                            wp_nav_menu( array(
                              'theme_location' => 'footer-useful-links', 
                              'menu_class' => 'widget_links'
                            ) )
                          ?>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title">Category</h6>
                        <?php 
                            wp_nav_menu( array(
                              'theme_location' => 'footer-category', 
                              'menu_class' => 'widget_links'
                            ) )
                          ?>
                    </div>
                </div>
                <!-- 
                <div class="col-lg-2 col-md-6 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title">My Account</h6>
                        <ul class="widget_links">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Orders History</a></li>
                            <li><a href="#">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                            -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title">Contact Info</h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p>26A Saleyards Road, Otahuhu, Auckland 1062</p>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:otahuhu@liquorhut.co.nz">otahuhu@liquorhut.co.nz</a>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <a href='tel:09 259 4943'>09 259 4943</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer border-top-tran">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-md-0 text-center text-md-left">© 2020 All Rights Reserved by Liquor Hut Limited | Built By <a hred="https://webduel.co.nz">Web<span>DUEL</span></a></p>
                </div>
                <div class="col-md-6">
                    <ul class="footer_payment text-center text-lg-right">
                        <li><a href="#"><img src="<?php echo get_site_url();?>/wp-content/themes/liquor-hut-otahuhu/assets/images/visa.png" alt="visa"></a></li>
                        <li><a href="#"><img src="<?php echo get_site_url();?>/wp-content/themes/liquor-hut-otahuhu/assets/images/master_card.png" alt="master_card"></a></li>
                       <!-- <li><a href="#"><img src="<?php //echo get_site_url();?>/wp-content/themes/liquor-hut-otahuhu/assets/images/discover.png" alt="discover"></a></li>
                        <li><a href="#"><img src="<?php //echo get_site_url();?>/wp-content/themes/liquor-hut-otahuhu/assets/images/paypal.png" alt="paypal"></a></li>-->
                        <li><a href="#"><img src="<?php echo get_site_url();?>/wp-content/themes/liquor-hut-otahuhu/assets/images/amarican_express.png" alt="amarican_express"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer();?>
<!--
<script>
  document.write(
    '<script src="http://' +
      (location.host || '${1:localhost}').split(':')[0] +
      ':${2:35729}/livereload.js?snipver=1"></' +
      'script>'
  );
</script>
--> 

  <!-- Latest jQuery --> 
  <script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  <!-- popper min js -->
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.3/umd/popper.min.js" integrity="sha512-53CQcu9ciJDlqhK7UD8dZZ+TF2PFGZrOngEYM/8qucuQba+a+BXOIRsp9PoMNJI3ZeLMVNIxIfZLbG/CdHI5PA==" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified Bootstrap --> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="<?php echo get_theme_file_uri('/assets/bootstrap/js/bootstrap.min.js'); ?>"></script> 

  <!-- owl-carousel min js  --> 
  <script src="<?php echo get_theme_file_uri('/assets/owlcarousel/js/owl.carousel.min.js'); ?>"></script> 
  <!-- magnific-popup min js  --> 
  <script src="<?php echo get_theme_file_uri('/assets/js/magnific-popup.min.js'); ?>"></script> 
  <!-- waypoints min js  --> 
  <script src="<?php echo get_theme_file_uri('/assets/js/waypoints.min.js'); ?>"></script> 
  <!-- parallax js  --> 
  <script src="<?php echo get_theme_file_uri('/assets/js/parallax.js'); ?>"></script> 
  <!-- countdown js  --> 
  <script src="<?php echo get_theme_file_uri('/assets/js/jquery.countdown.min.js'); ?>"></script> 
  <!-- imagesloaded js --> 
  <script src="<?php echo get_theme_file_uri('/assets/js/imagesloaded.pkgd.min.js'); ?>"></script>
  <!-- isotope min js --> 
  <script src="<?php echo get_theme_file_uri('/assets/js/isotope.min.js'); ?>"></script>
  <!-- jquery.dd.min js -->
  <script src="<?php echo get_theme_file_uri('/assets/js/jquery.dd.min.js'); ?>"></script>
  <!-- slick js -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- elevatezoom js -->
  <script src="<?php echo get_theme_file_uri('/assets/js/jquery.elevatezoom.js'); ?>"></script>
  <!-- scripts js --> 
  <script src="<?php echo get_theme_file_uri('/assets/js/scripts.js'); ?>"></script>
 
  <!-- isotope code--> 
  <script>
        var $grid = $("#grid").isotope({
        itemSelector: "h6",
        layoutMode: "fitRows"
    });
    
    $("#filters").on("click", "a", function() {
        var filterValue = $(this).attr("data-filter");
        // use filterFn if matches value
        $grid.isotope({ filter: filterValue });
    });
  </script>

</body>
</html>