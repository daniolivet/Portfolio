<?php 

/** 
* 
* Template Name: Home
*
**/

get_header();

?>

<div class="no_spaces">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col_no_spaces">
            <div class="position-relative">
                <div class="overlay"></div>
                <div id="bg_fade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="8000">
                    <div class="carousel-inner">
                        <?php $count = 1; ?>
                        <?php if( have_rows('repeater_images') ): while( have_rows('repeater_images') ) : the_row(); ?>
                            <div class="carousel-item <?php if( $count == 1 ){ echo "active"; } ?>">
                                <div class="item-image" style="background-image:url(<?php echo get_sub_field('image'); ?>);">
                                </div>
                            </div>
                        <?php $count++; endwhile; endif; ?>
                    </div>
                </div>
                <div class="wrapper-title">
                    <div class="container flex-col-center">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="box_title">
                                    <h1><?php echo get_field('name', $post->ID); ?></h1>
                                    <span id="textTyped"></span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="box_personal_data">
                                    <p class="small-title">- Introducción</p>
                                    <h2><?php echo get_field('title_description', $post->ID); ?></h2>
                                    <?php echo get_field('small_description', $post->ID); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mtb50">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>