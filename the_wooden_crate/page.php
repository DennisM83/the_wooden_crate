    <?php get_header(); ?>
    <span class="smaller-brand">The Wooden Crate</span>
    </section> 
    <div class="container-fluid">
      <div class="row">
        <div class="col">
        <?php 
            while(have_posts()) {
            the_post(); ?>


              <h1><?php the_title(); ?></h1>

              <p><?php the_content(); ?></p>

        <?php }

        ?>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>