<?php /* template name: Home */
get_header(); ?>
                <div class="hero center container">
                <h4><?php echo  get_post_meta( get_the_ID(), 'hero-section-name', true ); ?></h4>
                <h1><?php echo  get_post_meta( get_the_ID(), 'hero-title-name', true ); ?></h1>
                <p>
                    <?php echo  get_post_meta( get_the_ID(), 'hero-sub-title-name', true ); ?>
                </p>
                <div class="hero-btns">
                    <a href="<?php echo  get_post_meta( get_the_ID(), 'hero-btn-link', true ); ?>"><button type="button" class="btn-white"><?php echo  get_post_meta( get_the_ID(), 'hero-btn-text', true ); ?></button></a>
                </div>
            </div>
        </header>
        <!-- ========== Header Section End ========== -->
        <!-- ========== Our Services Section Start ========== -->
        <section class="our-services" id="service" style="background-image: url('<?php echo  get_post_meta( get_the_ID(), 'service-bg-img', true ); ?>');">
            <div class="container">
                <div class="row">
                    <div class="service-box">
                        <div class="title">
                            <h3><?php echo  get_post_meta( get_the_ID(), 'service-section-name', true ); ?></h3>
                            <h2><?php echo  get_post_meta( get_the_ID(), 'service-title-name', true ); ?></h2>
                        </div>
                        <div class="row">
                            <?php
                                $prefix = '_cmb_';
                                $entries = get_post_meta(get_the_ID() , $prefix . 'feature-f', true);
                                  foreach((array)$entries as $key => $entry) {
                                  
                                      $feature_img1 = $feature_title1 = $feature_subtitle1 = '';
                                      if ( isset( $entry[ $prefix . 'feature_img1' ] ) )
                                              $feature_img1 = esc_html( $entry[ $prefix . 'feature_img1' ] );      
                                                          
                                      if ( isset( $entry[ $prefix .'feature_title1' ] ) )    
                                              $feature_title1 = $entry[ $prefix . 'feature_title1' ];

                                      if ( isset( $entry[ $prefix .'feature_subtitle1' ] ) )     
                                              $feature_subtitle1 = $entry[ $prefix . 'feature_subtitle1' ];

                                      $feature_img2 = $feature_title2 = $feature_subtitle2 = '';
                                      if ( isset( $entry[ $prefix . 'feature_img2' ] ) )
                                              $feature_img2 = esc_html( $entry[ $prefix . 'feature_img2' ] );     
                                                          
                                      if ( isset( $entry[ $prefix .'feature_title2' ] ) )     
                                              $feature_title2 = $entry[ $prefix . 'feature_title2' ];

                                      if ( isset( $entry[ $prefix .'feature_subtitle2' ] ) )     
                                              $feature_subtitle2 = $entry[ $prefix . 'feature_subtitle2' ];
                            ?>
                                <div class="featured-section">
                                        <div class="feature-item">
                                            <span><img src="<?php echo $feature_img1; ?>" alt=""></span>
                                            <div>
                                                <h3><?php echo $feature_title1; ?></h3>
                                                <p class="text"><?php echo $feature_subtitle1; ?></p>
                                            </div>
                                        </div>
                                        <div class="feature-item">
                                            <span><img src="<?php echo $feature_img2; ?>" alt=""></span>
                                            <div>
                                                <h3><?php echo $feature_title2; ?></h3>
                                                <p class="text"><?php echo $feature_subtitle2; ?></p>
                                            </div>
                                        </div>
                                </div>

                            <?php 
                                } //* end foreach;
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========== Our Services Section End ========== -->


        <!-- ========== Project Section Start ========== -->
        <section class="work" id="project">
            <div class="container">
                <div class="title">
                    <h3><?php echo  get_post_meta( get_the_ID(), 'work-section-name', true ); ?></h3>
                    <h2><?php echo  get_post_meta( get_the_ID(), 'work-title-name', true ); ?></h2>
                    <p class="text">
                        <?php echo  get_post_meta( get_the_ID(), 'work-sub-title-name', true ); ?>
                    </p>
                </div>
                <div class="row owl-carousel owl-theme">

                    <?php
                        $project = new WP_Query(array(
                          'post_type' => 'project',
                        ));
                        while($project->have_posts()) : $project->the_post();
                    ?>
                    <div class="work-item">
                        <div class="work-img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="work-info">
                            <h3><?php the_title(); ?></h3>
                            <span><?php echo get_the_term_list( $post->ID, 'project_type' ) ?></span>
                            <p class="text"><?php the_content(); ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                </div>
            </div>
        </section>
        <!-- ========== Project Section End ========== -->


        <!-- ========== Work Details Section Start ========== -->
        <section class="work-details" id="about" style="background-image: url('<?php echo  get_post_meta( get_the_ID(), 'work-details-bg-img', true ); ?>');">
            <div class="container">
            <div class="title-white">
                <h3><?php echo  get_post_meta( get_the_ID(), 'work-details-section-name', true ); ?></h3>
                <h2><?php echo  get_post_meta( get_the_ID(), 'work-details-title-name', true ); ?></h2>
                <p class="text"><?php echo  get_post_meta( get_the_ID(), 'work-details-sub-title-name', true ); ?></p>
            </div>
        </section>
        <!-- ========== Work Details Section End ========== -->


        <!-- ========== Vision & Mission Section Start ========== -->
        <section class="vision-mission">
            <div class="container">
            <div class="row">
                <div class="vision-box" style="background-image: url('<?php echo  get_post_meta( get_the_ID(), 'vision-bg-img', true ); ?>');">
                    <div class="vision-item">
                        <span><img src="<?php echo  get_post_meta( get_the_ID(), 'vision-img', true ); ?>" alt=""></span>
                    </div>
                    <div class="vision-details">
                        <h3><?php echo  get_post_meta( get_the_ID(), 'vision-title-name', true ); ?></h3>
                        <p class="text"><?php echo  get_post_meta( get_the_ID(), 'vision-sub-title-name', true ); ?></p>
                    </div>
                </div>
                <div class="mission-box">
                    <div class="mission-item">
                        <span><img src="<?php echo  get_post_meta( get_the_ID(), 'mission-img', true ); ?>" alt=""></span>
                    </div>
                    <div class="mission-details">
                        <h3><?php echo  get_post_meta( get_the_ID(), 'mission-title-name', true ); ?></h3>
                        <p class="text"><?php echo  get_post_meta( get_the_ID(), 'mission-sub-title-name', true ); ?></p>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- ========== Vision & Mission Section End ========== -->


        <!-- ========== Team Section Start ========== -->
        <section class="team" id="team">
            <div class="container">
                <div class="title">
                    <h3><?php echo  get_post_meta( get_the_ID(), 'team-section-name', true ); ?></h3>
                    <h2><?php echo  get_post_meta( get_the_ID(), 'team-title-name', true ); ?></h2>
                    <p class="text"><?php echo  get_post_meta( get_the_ID(), 'team-sub-title-name', true ); ?></p>
                </div>
                <div class="row owl-carousel owl-theme">
                    <?php 
                        $team_member = new WP_Query(array(
                          'post_type' => 'team_member',
                        ));
                        while($team_member->have_posts()) : $team_member->the_post();
                    ?>  
                    <div class="team-item">
                        <div class="team-img">
                            <?php the_post_thumbnail(); ?>
                            <div class="team-icons">
                            <?php
                                $prefix = '_cmb_';
                                $entries = get_post_meta(get_the_ID() , $prefix . 'social', true);
                                  foreach((array)$entries as $key => $entry) {
                                  
                                      $social_icon = $social_icon_link = '';
                                      if ( isset( $entry[ $prefix . 'social-icon' ] ) )
                                              $social_icon = esc_html( $entry[ $prefix . 'social-icon' ] );      
                                                          
                                      if ( isset( $entry[ $prefix .'social-icon-link' ] ) )    
                                              $social_icon_link = $entry[ $prefix . 'social-icon-link' ];

                            ?>
                                <a href="<?php echo $social_icon_link; ?>" class="center">
                                <i class="<?php echo $social_icon; ?>"></i>
                                </a>
                            <?php
                                }
                            ?>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3><?php the_title(); ?></h3>
                            <span><?php echo get_the_term_list( $post->ID, 'designation' ) ?></span>
                            <p class="text"><?php the_content(); ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
        <!-- ========== Team Section End ========== -->


        <!-- ========== Call to Action Section Start ========== -->
        <section class="cta" style="background-image: url('<?php echo  get_post_meta( get_the_ID(), 'call-to-action-bg-img', true ); ?>');">
            <div class="container">
                <div class="row">
                    <div class="title-white">
                        <h2><?php echo  get_post_meta( get_the_ID(), 'call-to-action-title-name', true ); ?></h2>
                        <p class="text"><?php echo  get_post_meta( get_the_ID(), 'call-to-action-sub-title-name', true ); ?></p>
                    </div>
                    <div>
                        <a href="<?php echo  get_post_meta( get_the_ID(), 'call-to-action-btn-link', true ); ?>"><button type="button" class="btn-white"><?php echo  get_post_meta( get_the_ID(), 'call-to-action-btn-name', true ); ?></button></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========== Call to Action Section End ========== -->


        <!-- ========== Testimonial Section Start ========== -->
        <section class="testimonial" id="testimonial">
            <div class="container">
                <div class="title">
                    <h3><?php echo  get_post_meta( get_the_ID(), 'testimonial-section-name', true ); ?></h3>
                    <h2><?php echo  get_post_meta( get_the_ID(), 'testimonial-title-name', true ); ?></h2>
                </div>
                <div class="row owl-carousel owl-theme">
                    <?php 
                        $testimonial = new WP_Query(array(
                          'post_type' => 'testimonial',
                        ));
                        while($testimonial->have_posts()) : $testimonial->the_post();
                    ?>  
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <?php the_post_thumbnail( null, array( 'class' => 'img-fluid' ) ); ?>
                            <i class="fa fa-quote-left"></i>
                        </div>
                        <div class="testimonial-details">
                            <p class="text"><?php the_content(); ?></p>
                            <h3><?php the_title(); ?></h3>
                            <p class="text"><?php echo get_the_term_list( $post->ID, 'testimonial_designation' ) ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?> 
                </div>
            </div>
        </section>
        <!-- ========== Testimonial Section End ========== -->


        <!-- ========== Counts Section Start ========== -->
        <section id="counts" class="counts" style="background-image: url('<?php echo  get_post_meta( get_the_ID(), 'counts-bg-img', true ); ?>');">
            <div class="container">
                <div class="row counters">
                            <?php
                                $prefix = '_cmb_';
                                $entries = get_post_meta(get_the_ID() , $prefix . 'counts', true);
                                  foreach((array)$entries as $key => $entry) {
                                  
                                      $counts_img = $counts_num = $counts_title = '';
                                      if ( isset( $entry[ $prefix . 'counts-img' ] ) )
                                              $counts_img = esc_html( $entry[ $prefix . 'counts-img' ] );      
                                                          
                                      if ( isset( $entry[ $prefix .'counts-num' ] ) )    
                                              $counts_num = $entry[ $prefix . 'counts-num' ];

                                      if ( isset( $entry[ $prefix .'counts-title' ] ) )    
                                              $counts_title = $entry[ $prefix . 'counts-title' ];

                            ?>
                            <div class="count-section">
                                <img src="<?php echo $counts_img; ?>">
                                <span data-toggle="counter-up"><?php echo $counts_num; ?></span>
                                <p><?php echo $counts_title; ?></p>
                            </div>
                            <?php 
                                } //* end foreach;
                            ?>
                </div>
            </div>
        </section>
        <!-- ========== Counts Section End ========== -->


        <!-- ========== Contact Section Start ========== -->
        <section class="contact" id="contact">
            <div class="container">
                <div class="title">
                    <h3><?php echo  get_post_meta( get_the_ID(), 'contact-section-name', true ); ?></h3>
                    <h2><?php echo  get_post_meta( get_the_ID(), 'contact-section-title', true ); ?></h2>
                </div>
                <div class="row">
                    <div class="contact-left">
                        <?php echo do_shortcode('[contact-form-7 id="75" title="Contact form"]'); ?>
                    </div>
                    <div class="contact-right">
                        <div>
                            <h3><?php echo 'Address'; ?></h3>
                            <p class="text"><?php echo  get_post_meta( get_the_ID(), 'contact-section-address', true ); ?></p>
                        </div>
                        <div>
                            <h3><?php echo 'Email'; ?></h3>
                            <p class="text"><?php echo  get_post_meta( get_the_ID(), 'contact-section-email', true ); ?></p>
                        </div>
                        <div>
                            <h3><?php echo 'Call Us'; ?></h3>
                            <p class="text"><?php echo  get_post_meta( get_the_ID(), 'contact-section-number', true ); ?></p>
                        </div>
                        <div class="social-links">  
                            <?php
                                $prefix = '_cmb_';
                                $entries = get_post_meta(get_the_ID() , $prefix . 'social', true);
                                  foreach((array)$entries as $key => $entry) {
                                  
                                      $social_icon = $social_icon_link = '';
                                      if ( isset( $entry[ $prefix . 'social-icon' ] ) )
                                              $social_icon = esc_html( $entry[ $prefix . 'social-icon' ] );      
                                                          
                                      if ( isset( $entry[ $prefix .'social-icon-link' ] ) )    
                                              $social_icon_link = $entry[ $prefix . 'social-icon-link' ];

                            ?>                         
                            <a href="<?php echo $social_icon_link; ?>" class="social-icon"><i class="<?php echo $social_icon; ?>"></i></a>
                            <?php
                                }
                            ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========== Contact Section End ========== 
    <?php get_footer(); ?>

