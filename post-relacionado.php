<?php
   $tags = wp_get_post_tags($post->ID);
   if ($tags) {
      $tag_ids = array();
      foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
      $args=array(
      'tag__in' => $tag_ids,
      'post__not_in' => array($post->ID),
      'showposts'=>5, // Quantidade de posts relacionados que deverá ser exibida.
      'caller_get_posts'=>1
      );
      $my_query = new wp_query($args);
      if( $my_query->have_posts() ) {
         echo '<h3>Posts relacionados</h3>';
         while ($my_query->have_posts()) {
            $my_query->the_post();
            ?>
            <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Link permanente para <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
            <?php
            }
         }
   }
?>