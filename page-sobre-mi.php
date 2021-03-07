<!-- Plantilla sobre mí -->
<?php get_header(); ?>
    <main class="contenedor pagina seccion con-sidebar">
        <div class="text-center">
            <?php get_template_part('template-parts/paginas')?>
            
        </div>
        <!-- llamo al sidebar por defecto que es el 2, para los cursos -->
        <?php get_sidebar('cursos');?> 
    </main>

<?php get_footer(); ?>