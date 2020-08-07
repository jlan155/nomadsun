<!-- This tag wraps around our gallery and contains everything -->
<div class="gallery container flex flex-wrap center ph4-l">
  <?php $images = get_sub_field('gallery'); ?>	
  <?php foreach($images as $image) : ?>
    <!-- Here we get an image by its ID and added a custom field which adds a class name to control the width of the image -->
    <div class="gallery-image ph3 mb4 <?php the_field('image_width', $image['id']) ?>">
      <!-- Here we get each image by its ID -->
      <?php echo wp_get_attachment_image($image['id'], 'full'); ?>

      <!-- Here we assign our caption to a variable called $caption -->
      <?php $caption = wp_get_attachment_caption($image['id']); ?>

      <!-- If the caption is not empty, we render it onto the page -->
      <?php if (!empty($caption)) : ?>
        <p class="caption archivo-regular f5 o-50 pt3 mv0">
          <!-- Here we grab the caption by the attachment ID -->
          <?php echo $caption; ?>
        </p>
      <?php endif; ?>
    </div>
  <?php endforeach; ?>
</div>
