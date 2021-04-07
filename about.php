<?php /* Template Name: About */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); ?>
        <header class="header_about">
            <div class="header__wrapper">
                <div class="container">
                    <?php the_field( 'content1' ); ?>
                </div>
            </div>
        </header>

        <main>
            <section id="mission" class="section-main section-centr mission">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section__content">
                                <?php the_field( 'content2' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section
                    class="section-main section-main_wave section-centr specialists"
                    id="specialists"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section__content">
                                <?php the_field( 'content3' ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <ul class="triggers__list">
                            <?php if ( have_rows( 'repeater3' ) ):
                                $i=0;?>
                                <?php while ( have_rows( 'repeater3' ) ): the_row();
                                $i++;
                                $image = get_sub_field( 'image' );
                                ?>
                                <li>
                                    <img width="67" height="67" src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>" alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
                                    <h4><?php the_sub_field( 'text' ); ?></h4>
                                </li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="section-main section-centr what-is" id="whatiIs">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section__content">
                                <?php the_field( 'content4' ); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="owl-carousel section-slider whatiIs-slider">
                                <?php if ( have_rows( 'repeater4' ) ):
                                    $i=0;?>
                                    <?php while ( have_rows( 'repeater4' ) ): the_row();
                                    $i++;
                                    $image = get_sub_field( 'image' );
                                    ?>

                                        <div class="slider__item">
                                            <div class="slider__item-content">
                                                <div class="img-clip slider-clip1">
                                                    <img src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>" alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>"/>

                                                    <?php the_sub_field( 'svg' ); ?>
                                                </div>
                                                <span class="slider__item-name"><?php the_sub_field( 'name ' ); ?></span>
                                                <p class="slider__item-area"><?php the_sub_field( 'position' ); ?></p>
                                            </div>
                                        </div>
                                <?php endwhile; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-main section-main_wave contactus" id="contactus">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="section__photo img-clip">
                                <?php  $image = get_field( 'image5' );?>
                                <img src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>" alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>"/>

                                <svg class="clip-svg" width="0" height="0">
                                    <defs>
                                        <clipPath
                                                id="myClip3"
                                                clipPathUnits="objectBoundingBox"
                                                preserveAspectRatio="none"
                                        >
                                            <path
                                                    d="M0.421,0.005 C0.327,-0.008,0.221,0.002,0.151,0.064 C0.083,0.125,0.098,0.23,0.072,0.316 C0.047,0.4,-0.008,0.474,0.001,0.561 C0.011,0.661,0.052,0.756,0.122,0.829 C0.203,0.914,0.303,1,0.421,1 C0.538,0.996,0.611,0.879,0.706,0.812 C0.801,0.744,0.933,0.711,0.977,0.604 C1,0.496,0.998,0.361,0.93,0.265 C0.868,0.177,0.739,0.179,0.641,0.129 C0.564,0.09,0.507,0.016,0.421,0.005"
                                            ></path>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="section__content">
                                <?php the_field( 'content5' ); ?>

                                <?php the_field( 'contact_form5' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php }
}
get_footer(); ?>
