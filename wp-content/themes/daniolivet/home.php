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
            <div id="bg_fade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <?php $count = 1; ?>
                    <?php if( have_rows('repeater_images') ): while( have_rows('repeater_images') ) : the_row(); ?>
                        <div class="carousel-item <?php if( $count == 1 ){ echo "active"; } ?>">
                            <div class="item-image" style="background-image:url(<?php echo get_sub_field('image'); ?>);"></div>
                        </div>
                    <?php $count++; endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>