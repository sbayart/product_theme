<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Launch</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>" >
  </head>
  <body>
    <header>

    </header>
    <main>
        <article class="">
            <?php
            foreach ($posts as $post) :
                setup_postdata( $post );
                the_title('<h1>','</h1>');
                the_content('<p>','</p>');
             ?>
                <p><?php echo get_post_meta($post->ID, 'date', true); ?></p>
             <?php endforeach;?>
         </article>
    </main>

  </body>
</html>
