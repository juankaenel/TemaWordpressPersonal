<!-- Plantilla predeterminada, Inicio -->
<?php get_header(); ?>
    <main class="contenedor pagina seccion con-sidebar">
        <div class="contenido-principal">
            <?php get_template_part('template-parts/paginas')?>
        </div>
        <!-- llamo al sidebar por defecto que es el 1, para los videos -->
        <?php get_sidebar();?> 
    </main>

<?php get_footer(); ?>