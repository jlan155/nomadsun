<!-- Here we have our header -->
  <!-- We make the header have flexbox on large screens -->
  <div class="flex-l">

    <!-- Our header background image -->
    <!-- We make our header background have 100% width and the 60% width on large screens, as well as 50vh and 100vh height on small and large screens -->
    <div class="w-100 w-60-l vh-50 vh-100-l cover bg-center" style="<?php nice_background('hero_image'); ?>"></div>

    <!-- Our header content -->
    <div class="w-100 w-40-l flex items-center justify-center ph3 ph4-l relative">
      <div class="tc">
        <!-- Here we use absolute positioning for larger screens to put the date in the top center -->
        <p class="f6 archivo mt0 mb5 ttu tracked absolute-l top-0-l left-0-l w-100-l pt5">
          <?php nice_date(get_field('date')); ?>
          <span class="line mt4"></span>
        </p>
        <!-- Standard wordpress data -->
        <!-- We change the tpe scale for larger screens and squish the line height because of the bigger font size -->
        <h1 class="f2 f1-l archivo mt0 mb2 ttu lh-title">
          <?php the_title(); ?>
        </h1>
        <p class="f2 f1-l tenor mt0 mb4 mb5-l ttu lh-title">
          <?php the_field('subhead'); ?>
        </p>
        <!-- Specific to this component -->
        <p class="f4 cardo i measure center mv0">
          <?php the_sub_field('header_intro'); ?>
        </p>
      </div>
    </div>
  </div>