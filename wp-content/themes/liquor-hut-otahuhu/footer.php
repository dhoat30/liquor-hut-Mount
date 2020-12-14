<section class="subscribe-section">
  <div class="content">
    <div class="section-ft-size">
        Sign up For Inspiry Emails. 
    </div>
    <div class="work-sans-fonts font-s-regular">
      Plus hear about the latest and greatest from our family of brands!   
    </div>
  </div>

  <div class="form">
    <?php echo do_shortcode('[mc4wp_form id="88533"]');?>
  </div>
</section>
    <footer class="off-white-bc footer">

        <div class="footer-menu-row row-container light-grey">
          <div class="trade-nav">
            <h6 class="footer-menu-title">
              Trade
            </h6>
            <?php
                  wp_nav_menu( array( 
                      'theme_location' => 'footer-trade-menu'
                    )); 
            ?>
          </div>

          <div class="help-info-nav">
            <h6 class="footer-menu-title">
              Help & Info
            </h6>
            <?php 
              wp_nav_menu( array(
                'theme_location' => 'footer-help-info'
              ) )
            ?>

          </div>

          <div class="Store">
            <h6 class="footer-menu-title">
              Store
            </h6>
            <?php 
              wp_nav_menu( array(
                'theme_location' => 'footer-store'
              ) )
            ?>

          </div>

          <div class="ways-to-shop">
            <h6 class="footer-menu-title">
              Ways to Shop
            </h6>
            <?php 
              wp_nav_menu( array(
                'theme_location' => 'footer-ways-to-shop'
              ) )
            ?>

          </div>

          <div class="ideas-insipiration">
            <h6 class="footer-menu-title">
              IDEAS & INSPIRATION
            </h6>
            <?php 
              wp_nav_menu( array(
                'theme_location' => 'footer-ideas-inspiration'
              ) )
            ?>
            <div class="social-media-footer">
                    <h6 class="column-s-font regular">Get social with us</h6>
                    <div class="underline-dg"></div>
                    <div class="social-media-container">
                        <a href="https://www.facebook.com/inspiryliveaninspiredlife/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="" target="_blank"><i class="fab fa-instagram-square"></i></a>
                        <a href="" target="_blank"><i class="fab fa-pinterest-square"></i></a>
                        <a href="" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
              </div>
            
          </div>

        </div>

        <div class="footer-img">
          <img src="<?php echo get_site_url();?>/wp-content/uploads/2020/11/Inspiry_Slogan-transparent.png" alt="Slogan">
        </div>
        <div class="copyright-container row-container light-grey">
              <div>© Copyright 2019 Inspiry NZ. All rights reserved. <a href="https://webduel.co.nz" rel="nofollow" target="_blank" class="dark-green rm-txt-dec"> Build By WebDuel</a></div>
        </div>
    </footer>

    
<!--design board container--> 
<div class="board-overlay overlay">
                                  <div class="choose-board-container" data-post-id="value" data-post-title="value">
                                    <div class="choose-board">Choose Board</div>
                                    <div class="close-icon">X</div>
                                    <ul class="board-list">
                                        <?php 
                                        
                                        //wp query to get parent title of boards 
                                        
                                        $boardLoop = new WP_Query(array(
                                            'post_type' => 'boards', 
                                            'post_parent' => 0
                                        ));
                                        
                                        while($boardLoop->have_posts()){
                                            $boardLoop->the_post(); 
                                            
                                          
                                        }
                                    
                                            while($boardLoop->have_posts()){ 
                                                $boardLoop->the_post(); 
                                                ?>
                                                        <li class="board-list-item" data-boardID='<?php echo get_the_id(); ?>'>
                                                        
                                                        <?php 
                                                            
                                                        the_title();?>
                                                        <div class="loader"></div>

                                                        </li>

                                                <?php
                                                wp_reset_postdata(  );
                                            }
                                        ?>
                                    </ul>
                                    <div class="create-new-board"><i class="fal fa-plus"></i> Create New Board</div>
                                </div>

                                <div class="project-save-form-section">
   
                                <div class="project-save-form-container"> 
                                    <div class="work-sans-fonts regular form-title font-s-med">Create Board</div>
                                    <div class="form-underline"></div>
                                    <div class="form">
                                        <form id="new-board-form">
                                            <label for="name">Give your board a title*</label>
                                            <input type="text" name="board-name" id="board-name">
                                            <label for="description">Description</label>
                                            <textarea name="board-description" id="board-description" cols="30" rows="10"></textarea>
                                            
                                            <div class="btn-container">
                                                <button type="button" class="cancel-btn btn"> Cancel</button>
                                                <button type="submit" class="save-btn btn btn-dk-green"> Save</button>
                                              
                                                <div class="loader"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
</div>

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
  <script src="<?php echo get_theme_file_uri(); ?>/assets/js/jquery-1.12.4.min.js"></script> 
  <!-- popper min js -->
  
  <script src="<?php echo get_theme_file_uri(); ?>/assets/js/popper.min.js"></script>
  <!-- Latest compiled and minified Bootstrap --> 
  <script src="<?php echo get_theme_file_uri(); ?>/assets/bootstrap/js/bootstrap.min.js"></script> 
  <!-- owl-carousel min js  --> 
  <script src="<?php echo get_theme_file_uri(); ?>/assets/owlcarousel/js/owl.carousel.min.js"></script> 
  <!-- magnific-popup min js  --> 
  <script src="<?php echo get_theme_file_uri(); ?>/assets/js/magnific-popup.min.js"></script> 
  <!-- waypoints min js  --> 
  <script src="<?php echo get_theme_file_uri(); ?>/assets/js/waypoints.min.js"></script> 
  <!-- parallax js  --> 
  <script src="<?php echo get_theme_file_uri(); ?>/assets/js/parallax.js"></script> 
  <!-- countdown js  --> 
  <script src="<?php echo get_theme_file_uri(); ?>/assets/js/jquery.countdown.min.js"></script> 
  <!-- imagesloaded js --> 
  <script src="<?php echo get_theme_file_uri(); ?>/assets/js/imagesloaded.pkgd.min.js"></script>
  <!-- isotope min js --> 
  <script src="<?php echo get_theme_file_uri(); ?>/assets/js/isotope.min.js"></script>
  <!-- jquery.dd.min js -->
  <script src="<?php echo get_theme_file_uri(); ?>/assets/js/jquery.dd.min.js"></script>
  <!-- slick js -->
  <script src="<?php echo get_theme_file_uri(); ?>/assets/js/slick.min.js"></script>
  <!-- elevatezoom js -->
  <script src="<?php echo get_theme_file_uri(); ?>/assets/js/jquery.elevatezoom.js"></script>
  <!-- scripts js --> 
  <script src="<?php echo get_theme_file_uri(); ?>/assets/js/scripts.js"></script>
</body>
</html>