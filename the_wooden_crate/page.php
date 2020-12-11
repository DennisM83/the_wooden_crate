    <?php get_header(); ?> 
    <div class="container-fluid">
      <div class="row">
        <div class="col">
        <span class="smaller-brand">The Wooden Crate</span>
        <?php 
            while(have_posts()) {
            the_post(); ?>


              <h1><?php the_title(); ?></h1>

        <?php }

        ?>
        </div>
      </div>
    </div>
    </section>
    <?php get_footer(); ?>