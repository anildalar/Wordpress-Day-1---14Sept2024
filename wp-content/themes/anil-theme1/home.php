<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home.php</title>
        
        <?php wp_head() ?>
    </head>
    <body>
        <?php get_template_part('templates/header'); ?>
        <main class="h-100">
            <div class="row h-100">
                <?php get_template_part('templates/sidebar'); ?>
                <section class="col-9 h-100 a_tbdr">
                
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part('templates/content'); ?>
                            <hr />
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>No posts found.</p>
                    <?php endif; ?>

                </section>
            </div>
        </main>
        <?php get_template_part('templates/footer'); ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <?php wp_footer() ?>
    </body>
</html>