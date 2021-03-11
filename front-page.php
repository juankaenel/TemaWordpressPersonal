<?php get_header('front');?>
    <section class="bienvenida text-center seccion">
        <h2 class="texto-primario"><?php the_field('encabezado_bienvenida');?></h2>
        <p><?php the_field('texto_bienvenida');?></p>
    </section>

    <section class="cursos">
        <div class="contenedor seccion">
            <h2 class="text-center texto-primario">Mis cursos</h2>
            <?php  personalPage_lista_cursos(3); ?>
       
        <div class="contenedor-boton">
            <a href="<?php echo esc_url( get_permalink (get_page_by_title('cursos'))); ?>" 
            class="boton boton-primario">
                Ver todos los cursos
            </a>
        </div>
        </div>
    </section>
    <section class="blog contenedor seccion">
        <h2 class="text-center texto-primario">Mi Blog</h2>
        <p class="text-center">Acá encontrarás contenido informativo en Seguridad Informática, Programación y mucho más!</p>
        <ul class="lista-blog">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                );
                $blog = new WP_Query($args);
                while($blog->have_posts()): $blog->the_post();
                    get_template_part('template-parts/loop','blog');
                endwhile; wp_reset_postdata();
            ?>
        </ul>
        
    </section>


<?php get_footer(); ?>