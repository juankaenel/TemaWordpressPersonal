            <li class="card gradient">
                <?php the_post_thumbnail('mediano') ?>
                <!-- categoría -->
                <?php the_category();?>
                <div class="contenido">
                    <!-- título -->
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <!-- autor del post -->
                    <p class="meta">
                        <span>Por: </span>
                        <a href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>">
                            <?php echo get_the_author_meta('display_name'); ?>
                        </a>
                    </p>
                    <!-- fecha -->
                    <p class="meta">
                        <span>Fecha:</span>
                        <?php the_time(get_option('date_format')); ?>
                    </p>
                </div>
            </li>