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
                                    <h2><?php echo get_field('title_description', $post->ID); ?></h2>
                                    <?php echo get_field('small_description', $post->ID); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box_arrow position-relative">
                    <a class="arrow-down bounce" href="#"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt75">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="box_habilities_data text-center">
                    <h2><?php echo get_field('title_hability', $post->ID); ?></h2>
                    <?php echo get_field('description_hability', $post->ID); ?>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="box_habilities mt50">
                    <div class="owl-carousel owl-theme">
                    <?php if( have_rows('repeater_languages') ): while ( have_rows('repeater_languages') ) : the_row(); ?>
                        <div class="item item-hability">
                            <div class="image-hability" style="background-image: url('<?php echo get_sub_field('image'); ?>');"></div>
                        </div>
                    <?php endwhile; else : endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="box_knowledge mt50 text-center">
                    <h2><?php echo get_field('celebrate_phrase'); ?></h2>
                    <p class="grey"><?php echo get_field('celebrate_author'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<hr class="bg-grey mtb75">

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="box_portfolio text-center mb50">
                <h2><?php echo get_field('title_portfolio', $post->ID); ?></h2>
                <?php echo get_field('description_portfolio', $post->ID); ?>
            </div>
        </div>
    </div>
    <div class="row">
    <?php query_posts( 
            array(
                'post_type' => 'portfolio',
                'posts_per_page' => -1 )
            ); 
    ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-slide' ); ?>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <a href="<?php echo get_field('link'); ?>">
                <div class="position-relative mb30">
                    <div class="item-portfolio" style="background-image: url('<?php echo $img[0]; ?>');"></div>
                    <div class="wrapper-data">
                        <div class="wrapper-info"></div>
                        <div class="box-info">
                            <h6><?php echo get_the_title(); ?></h6>
                            <?php the_content(); ?>
                            <ul>
                                <?php 
                                $cat_list = get_the_terms($post->ID, 'categoria_portfolio'); 
                                foreach( $cat_list as $cat ){
                                ?>
                                <li><?php echo $cat->name; ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?php endwhile; endif; wp_reset_query(); ?>
    </div>
</div>


<div class="mt50">

</div>

<?php get_footer(); ?>