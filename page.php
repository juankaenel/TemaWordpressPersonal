<!-- Plantilla predeterminada -->
<?php get_header(); ?>
    <main class="contenedor pagina seccion con-sidebar">
        <div class="contenido-principal">
            <?php while( have_posts() ): the_post(); ?>   
                <h1 class="text-center texto-primario"> <?php the_title();   ?> </h1>

                <?php 
                    if(has_post_thumbnail()):
                        the_post_thumbnail('medium',array('class'=>'imagen-destacada'));
                    endif;
                ?>

                <?php the_content(); ?>
                
                <p>Escrito por <?php the_author();?></p>
                <p>Escrito el <?php the_date();?></p>
            <?php endwhile; ?>
        </div>
        <?php get_sidebar();?>

    </main>

<?php get_footer(); ?>