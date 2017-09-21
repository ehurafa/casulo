<ul class="lista1">
    <span class="tit">Tópicos recentes</span>
    <?php

        $query = new WP_Query( array( 'posts_per_page' => 5, 'orderby' => 'date', 'order' => 'DESC' ) );

    ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; wp_reset_postdata(); ?>
</ul>