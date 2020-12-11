    <?php get_header(); ?> 
    </section>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
        <?php 
            while(have_posts()) {
            the_post(); ?>
            
              <h1><?php the_title(); ?></h1>

        <?php }

        ?>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>