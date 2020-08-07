<!-- Using the permalink gives us a link to the post -->

<!-- <h1>
  <a href="<?php the_permalink(); ?>">
    Check out <?php the_title(); ?>!
  </a>
</h1> -->

<!-- Here we make the hero have a min-height of 100vh, cober the background, center it, add flex box and make the content center vertically and horizontally -->
<a class="db link hero min-vh-100 cover bg-center flex items-center justify-center" style="<?php nice_background('hero_image'); ?>" href="<?php the_permalink(); ?>">
<!-- Make the text white and center it -->
  <div class="hero-content white tc ph3 ph4-l">

    <!-- Our location title -->
    <!-- Here we make it bold, have 0 margin and uppercase letters -->
    <h1 class="hero-heading f2 f1-l archivo b ma0 mb3 ttu lh-title">
      <?php the_title(); ?>
    </h1>

    <!-- Our subheading -->
    <?php if( get_field('subhead') ): ?>
      <!-- Here we do a similar thing but with a bigger margin on the bottom -->
      <p class="hero-subhead f2 f1-l tenor mb5 mb6-l mt0 ttu lh-title">
        <?php the_field('subhead'); ?>
      </p>
    <?php endif; ?>

    <!-- Our formatted date -->
    <?php if( get_field('date') ): ?>
      <!-- Here we use the f6 small font size, uppercase text and track the date with some subtle spacing -->
      <p class="f6 date archivo ma0 ttu tracked">
        <?php
          // Here we convert our date info a format that php can work with, and then we format it to be nice and readable
          nice_date(get_field('date'));
        ?>
      </p>
    <?php endif; ?>

  </div>
</a>
