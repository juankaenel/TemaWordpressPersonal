<!-- Plantilla para cursos -->
<?php get_header(); ?>
    <main class="contenedor pagina seccion no-sidebar">
        <div class="text-center">
            <?php get_template_part('template-parts/paginas')?>
        
            <?php personalPage_lista_cursos(); ?>
        </div>

    </main>

<?php get_footer(); ?>