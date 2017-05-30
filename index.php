<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Launch</title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>" >
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    </head>
    <body>
        <header>

        </header>
        <main>
            <article class="">
                <img src="wp-content/themes/product_theme/img/soon.jpg" alt="soon">
                <?php
                foreach ($posts as $post) :
                    setup_postdata( $post );
                    the_title('<h1>','</h1>');
                    the_content('<p>','</p>');
                ?>
                    <p class="date"><?php echo get_post_meta($post->ID, 'date', true); ?></p>
                <?php endforeach;?>

                <form method="get">
                    <input type="text" name="first_name" value="" placeholder="First Name">
                    <input type="text" name="last_name" value="" placeholder="Last Name">
                    <input type="mail" name="email" value="" placeholder="Email">
                    <span>Select type option for your newsletter</span>
                    <select class="" name="option" required>
                        <option value="html">HTML</option>
                        <option value="text">TEXT</option>
                    </select>
                    <button type="submit" name="button">Recevoir la newsletter</button>
                    <?php
                        $wpdb->insert(
                            'form',  array(
                                'first_name' => $_GET['first_name'],
                                'last_name' => $_GET['last_name'],
                                'email' => $_GET['email'],
                                'option' => $_GET['option']
                        ));
                    ?>
                </form>
            </article>
        </main>
    </body>
</html>
