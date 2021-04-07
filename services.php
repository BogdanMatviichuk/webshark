<?php /* Template Name: Services */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); ?>
        <header class="header_services">
            <div class="header__wrapper">
                <div class="container">
                    <?php the_field( 'content1' ); ?>
                </div>
            </div>
        </header>

        <main>
            <section class="section-main trust" id="trust">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 offset-xl-1 col-xl-5 order-2 order-md-1">
                            <div class="section__content">
                                <?php the_field( 'content2' ); ?>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-6 order-1 order-md-2">
                            <div class="section__photo img-clip">
                                <?php  $image = get_field( 'image2' );?>
                                <img src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>" alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>"/>

                                <svg class="clip-svg" width="0" height="0">
                                    <defs>
                                        <clipPath id="myClip1" clipPathUnits="objectBoundingBox" preserveAspectRatio="none">
                                            <path d="M0.324,0.026 C0.433,-0.016,0.557,0.001,0.652,0.05 C0.71,0.08,0.74,0.12,0.773,0.165 C0.787,0.183,0.801,0.203,0.819,0.223 C0.836,0.243,0.857,0.262,0.878,0.282 C0.916,0.318,0.955,0.356,0.979,0.398 C0.987,0.412,0.993,0.427,0.997,0.442 C1,0.456,1,0.471,1,0.486 C1,0.509,0.996,0.533,0.989,0.557 C0.97,0.611,0.936,0.665,0.902,0.715 C0.844,0.8,0.764,0.871,0.668,0.918 C0.566,0.969,0.443,1,0.346,0.989 C0.289,0.966,0.274,0.907,0.258,0.846 C0.247,0.805,0.237,0.763,0.211,0.73 C0.188,0.7,0.152,0.68,0.117,0.659 C0.07,0.632,0.023,0.605,0.009,0.555 C-0.017,0.462,0.03,0.358,0.084,0.267 C0.142,0.17,0.214,0.068,0.324,0.026"></path>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="result" class="section-main result">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-6">
                            <div class="section__content">
                                <?php the_field( 'content3' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-main section-centr services-specialists" id="servicesSpecialists">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section__content">
                                <h2><?php the_field( 'title4' ); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <ul class="triggers__list">
                            <?php if ( have_rows( 'repeater4' ) ):
                                $i=0;?>
                                <?php while ( have_rows( 'repeater4' ) ): the_row();
                                $i++;
                                $image = get_sub_field( 'image' );
                                ?>
                                <li>
                                    <img width="62" height="62" src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>" alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
                                    <?php the_sub_field( 'content' ); ?>
                                </li>
                            <?php endwhile; ?>
                            <?php endif; ?>

                        </ul>
                    </div>
                </div>
            </section>

            <section class="section-main section-main_wave services-digital" id="servicesDigital">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-5 offset-lg-1">
                            <div class="section__content">
                                <?php the_field( 'content5' ); ?>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="section__photo img-clip">
                                <?php  $image = get_field( 'image5' );?>
                                <img src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>" alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>"/>

                                <svg class="clip-svg" width="0" height="0">
                                    <defs>
                                        <clipPath id="myClip2" clipPathUnits="objectBoundingBox" preserveAspectRatio="none">
                                            <path d="M0.421,0.005 C0.327,-0.008,0.221,0.002,0.151,0.064 C0.083,0.125,0.098,0.23,0.072,0.316 C0.047,0.4,-0.008,0.474,0.001,0.561 C0.011,0.661,0.052,0.756,0.122,0.829 C0.203,0.914,0.303,1,0.421,1 C0.538,0.996,0.611,0.879,0.706,0.812 C0.801,0.744,0.933,0.711,0.977,0.604 C1,0.496,0.998,0.361,0.93,0.265 C0.868,0.177,0.739,0.179,0.641,0.129 C0.564,0.09,0.507,0.016,0.421,0.005"></path>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php }
}
get_footer(); ?>
