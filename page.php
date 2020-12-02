    <?php get_header(); ?> 

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm">
        <?php 
            while(have_posts()) {
            the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content();?>
        <?php }

        ?>
        </div>
      </div>
    </div>

    <?php get_footer(); ?>