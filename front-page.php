<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); ?>
<header>
    <div class="header__wrapper">
        <div class="container">
            <?php the_field( 'content1' ); ?>
            <div class="btn-container">
                <a href="<?php the_field( 'left_button_link' ); ?>" class="btn btn-primary"><?php the_field( 'left_button_text' ); ?></a>
                <a href="<?php the_field( 'right_button_link' ); ?>" class="btn btn-secondary"><?php the_field( 'right_button_text' ); ?></a>
            </div>

            <a class="header__scrollto-btn" href="#team" aria-label="Scroll to next screen"></a>
        </div>
    </div>
</header>

<main>
    <section class="section-main team" id="team">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="section__photo img-clip">
                        <?php  $image = get_field( 'image2' ); ?>
                        <img src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>" alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">

                        <svg class="clip-svg" width="0" height="0">
                            <defs>
                                <clipPath id="myClip1" clipPathUnits="objectBoundingBox" preserveAspectRatio="none">
                                    <path d="M0.324,0.024 C0.432,-0.017,0.557,-0.001,0.651,0.048 C0.71,0.079,0.739,0.118,0.772,0.163 C0.786,0.182,0.801,0.201,0.819,0.221 C0.836,0.241,0.857,0.26,0.877,0.28 C0.928,0.328,0.981,0.379,0.996,0.44 C1,0.531,0.96,0.629,0.902,0.713 C0.843,0.798,0.764,0.869,0.668,0.917 C0.566,0.967,0.443,1,0.346,0.988 C0.288,0.964,0.273,0.905,0.258,0.845 C0.247,0.803,0.236,0.761,0.211,0.729 C0.188,0.698,0.152,0.678,0.117,0.658 C0.069,0.63,0.022,0.603,0.008,0.553 C-0.017,0.46,0.03,0.356,0.084,0.266 C0.142,0.168,0.214,0.067,0.324,0.024"></path>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="section__content">
                        <?php the_field( 'content2' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-main section-main_wave benefits" id="benefits">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 ">
                    <div class="section__content">
                        <?php the_field( 'content3' ); ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 ">
                    <div id="benefits-carousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php if ( have_rows( 'repeater3' ) ):
                                $i=0;?>
                                <?php while ( have_rows( 'repeater3' ) ): the_row();
                                $i++;
                                    $image = get_sub_field( 'image' );
                                    ?>
                                    <div class="carousel-item <?php if($i == 1 ) { echo 'active'; }?>">
                                        <div class="benefits__card">
                                            <img src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>" width="44" height="44" alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
                                            <?php the_sub_field( 'content' ); ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#benefits-carousel"  data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#benefits-carousel"  data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                        <div class="carousel-indicators">
                            <?php if ( have_rows( 'repeater3' ) ):
                                $i=0;?>
                                <?php while ( have_rows( 'repeater3' ) ): the_row();?>
                                <button type="button" data-bs-target="#benefits-carousel" data-bs-slide-to="<?php echo $i;?>" <?php if($i == 0 ) { echo 'class="active"'; }?> aria-current="true" aria-label="Slide <?php echo $i+1;?>"></button>
                            <?php $i++; endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-main digital" id="digital">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="section__photo img-clip">
                        <?php  $image = get_field( 'image4' ); ?>
                        <img src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>" alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>" width="445" height="438">

                        <svg class="clip-svg" width="0" height="0">
                            <defs>
                                <clipPath id="myClip2" clipPathUnits="objectBoundingBox" preserveAspectRatio="none">
                                    <path d="M0.352,0 H0.351 C0.278,0,0.204,0.017,0.151,0.064 C0.106,0.105,0.097,0.166,0.089,0.227 V0.227 C0.085,0.257,0.081,0.288,0.072,0.316 C0.064,0.343,0.052,0.37,0.041,0.396 C0.021,0.444,0,0.491,0,0.542 V0.543 C0,0.549,0,0.555,0.001,0.561 C0.011,0.661,0.052,0.756,0.122,0.829 C0.203,0.914,0.303,1,0.421,1 C0.501,0.997,0.561,0.941,0.621,0.884 C0.648,0.859,0.676,0.833,0.706,0.812 C0.735,0.79,0.768,0.773,0.802,0.755 C0.875,0.716,0.947,0.678,0.977,0.604 C1,0.496,0.998,0.361,0.93,0.265 C0.89,0.208,0.823,0.189,0.754,0.169 C0.715,0.158,0.676,0.147,0.641,0.129 C0.613,0.115,0.587,0.096,0.562,0.076 L0.562,0.076 C0.518,0.044,0.475,0.012,0.421,0.005 C0.398,0.002,0.375,0,0.352,0"></path>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="section__content">
                        <?php the_field( 'content4' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="triggers" id="triggers">
        <div class="container">
            <h2><?php the_field( 'title5' ); ?></h2>

            <ul class="triggers__list">
                <?php if ( have_rows( 'repeater5' ) ):
                    $i=0;?>
                    <?php while ( have_rows( 'repeater5' ) ): the_row();
                    $i++;
                    $image = get_sub_field( 'image' );
                    ?>
                    <li>
                        <img width="67" height="67" src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>" alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
                        <h4><?php the_sub_field( 'title' ); ?></h4>
                    </li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <a href="<?php the_field( 'button_link5' ); ?>" class="btn btn-primary"><?php the_field( 'button_text5' ); ?></a>
        </div>
    </section>

    <section class="clients" id="clients">
        <div class="container">
            <h2><?php the_field( 'title6' ); ?></h2>
            <ul class="clients__logo-list">
                <?php if ( have_rows( 'repeater6' ) ):
                    $i=0;?>
                    <?php while ( have_rows( 'repeater6' ) ): the_row();
                    $i++;
                    $image = get_sub_field( 'image' );
                    ?>
                    <li>
                        <a>
                            <img src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>" alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
                        </a>
                    </li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </section>

    <section class="section-main section-main_wave contactus" id="contactus">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="section__photo img-clip">
                        <img src="<?php echo get_template_directory_uri();?>/img/contactus.png" alt="Contact Us">

                        <svg class="clip-svg" width="0" height="0">
                            <defs>
                                <clipPath id="myClip3" clipPathUnits="objectBoundingBox" preserveAspectRatio="none">
                                    <path d="M0.421,0.005 C0.327,-0.008,0.221,0.002,0.151,0.064 C0.083,0.125,0.098,0.23,0.072,0.316 C0.047,0.4,-0.008,0.474,0.001,0.561 C0.011,0.661,0.052,0.756,0.122,0.829 C0.203,0.914,0.303,1,0.421,1 C0.538,0.996,0.611,0.879,0.706,0.812 C0.801,0.744,0.933,0.711,0.977,0.604 C1,0.496,0.998,0.361,0.93,0.265 C0.868,0.177,0.739,0.179,0.641,0.129 C0.564,0.09,0.507,0.016,0.421,0.005"></path>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="section__content">
                        <?php the_field( 'content7' ); ?>
                        <?php the_field( 'form' ); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php }
}
get_footer(); ?>