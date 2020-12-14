<?php 
/* Template Name: Places * Template Post Type: post*/ /*The template for displaying full width single posts. */
get_header(); 

?>


         
<!-- START SECTION BANNER -->
<div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
    <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-ride="carousel">
        <div class="carousel-inner">
        <?php 
        $argsSlider = array(
            'post_type' => 'sliders',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'tax_query' => array(
                array(
                    'taxonomy' => 'hero-section-slider',
                    'field'    => 'slug',
                    'terms'    => array('hero section'),
                )
                ), 
                'orderby' => 'date', 
                'order' => 'ASC'
        );
        $slider = new WP_Query( $argsSlider );
        while($slider->have_posts()){
            $slider->the_post();
            ?>
            
            
            <div class="carousel-item background_bg active" data-img-src='<?php echo get_the_post_thumbnail_url(null, 'large');?>'>
                <div class="banner_slide_content banner_content_inner">
                	<div class="container">
                    	<div class="row">
                            <div class="col-lg-7 col-10">
                                <div class="banner_content overflow-hidden">
                                    <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="0.5s"><?php echo get_field('title');?></h2>
                                    <h5 class="mb-3 mb-sm-4 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="1s"><?php echo get_field('subtitle');?></h5>
                                    <a class="btn btn-fill-out staggered-animation text-uppercase" href="<?php echo get_field('button_link');?>" data-animation="slideInLeft" data-animation-delay="1.5s"><?php echo get_field('button_text');?></a>
                                </div>
                            </div>
                    	</div>
                    </div>
                </div>
            </div>
           
            
            <?php
        }
?>
           
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
    </div>
</div>
                                       


<?php 

get_footer(); 
?>