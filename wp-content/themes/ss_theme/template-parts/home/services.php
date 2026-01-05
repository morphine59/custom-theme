<section class="services-section">
    <div class="container">

        <h2 class="section-title">Services</h2>

        <?php if ( have_rows('services_list') ) : ?>
            <div class="services-grid">

                <?php while ( have_rows('services_list') ) : the_row(); 
                    $icon = get_sub_field('icon_class');
                    $title = get_sub_field('title');
                    $text = get_sub_field('sub_text');
                ?>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="<?php echo esc_attr($icon); ?>"></i>
                    </div>

                    <h3><?php echo esc_html($title); ?></h3>
                    <p><?php echo esc_html($text); ?></p>
                </div>

                <?php endwhile; ?>

            </div>
        <?php endif; ?>

        <?php 
        $bottom_link = get_field('services_bottom_link');
        if ( $bottom_link ) :
        ?>
            <div class="services-footer">
                <?php echo wp_kses_post($bottom_link); ?>
            </div>
        <?php endif; ?>

    </div>
</section>
