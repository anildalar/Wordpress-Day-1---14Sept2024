<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home.php</title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <?php wp_head() ?>
    </head>
    <body>
        <?php get_header(); ?>
        <main class="h-100">
            <div class="row h-100">
                <?php get_sidebar(); ?>
                <section class="col-9 h-100 a_tbdr">
                
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                            <hr />
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>No posts found.</p>
                    <?php endif; ?>

                </section>
            </div>
        </main>
        <?php get_footer(); ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <?php wp_footer() ?>
    </body>
</html>