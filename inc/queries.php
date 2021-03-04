<?php
function personalPage_lista_cursos(){ ?>
    <ul class="lista-cursos">
        <?php
            $args = array(
                'post_type' => 'personalPage_Cursos',
                'posts_per_page' => 10,
                'order_by' => 'title',
            );
            $cursos = new WP_Query($args);
            /* Recorremos todos los cursos de la bd */
            while( $cursos->have_posts()): $cursos->the_post();?>

            <li class="curso card gradient">
                <?php the_post_thumbnail('mediano'); ?>
                <div class="contenido">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title() ?></h3>
                    </a>

                    <p><?php the_field('descripcion_del_curso'); ?></p>

                </div>
            </li>
        <?php endwhile; wp_reset_postdata(); ?>
            

    </ul>

<?php
}