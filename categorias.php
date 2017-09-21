<ul class="lista1">
    <span class="tit">Categorias</span>
    <?php

        $categories = get_categories();

    ?>
    <?php foreach($categories as $category) : ?>
    <li><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></li>
    <?php endforeach; ?>
</ul>