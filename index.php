<?php get_header(); ?>

<div class="container">
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-md-6 mb-4"> <!-- Každý příspěvek zabírá polovinu řádku -->
                <div class="card h-100 d-flex flex-row"> <!-- "Karta" příspěvku -->
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                        </a>
                    <?php endif; ?>

                    <div class="card-body">
                        <!-- Kategorie -->
                        <div class="post-category mb-2">
                            <?php foreach (get_the_category() as $category) : ?>
                                <span class="badge bg-primary"><?php echo $category->name; ?></span>
                            <?php endforeach; ?>
                        </div>

                        <!-- Nadpis -->
                        <h5 class="card-title">
                            <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none">
                                <?php the_title(); ?>
                            </a>
                        </h5>

                        <!-- Úryvek -->
                        <p class="card-text"><?php echo get_the_excerpt(); ?></p>

                        <!-- Autor a datum -->
                        <p class="card-meta text-muted mb-0">
                            Autor: <?php the_author(); ?> | 
                            <time datetime="<?php echo get_the_date('c'); ?>">
                                <?php echo get_the_date(); ?>
                            </time>
                        </p>
                    </div>
                </div>
            </div>
        <?php endwhile; else : ?>
            <p>Žádné příspěvky nebyly nalezeny.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
