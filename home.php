<?php get_header(); ?>
<!-- Template blog -->
    <main class="pagina seccion no-sidebars contenedor">
        <ul class="lista-blog">
           <?php get_template_part('template-parts/loop','blog'); ?>
        </ul>
    </main>

<?php get_footer(); ?>