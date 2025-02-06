<?php
get_header();
?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">
			<div class="container-fluid">
			<?php
      while(have_posts()) : the_post();
      ?>
        <section>
          <?php the_title('<h1>', '</h1>'); ?>

          <?php
          the_content();
          ?>
        </section>

      <?php
      endwhile;
      ?>
			</div>
    </main>
  </div>

<?php
get_footer();
