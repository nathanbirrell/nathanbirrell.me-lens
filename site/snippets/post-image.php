<?php
    if ($page->isHomePage()) {
      $post = $pages->find('a')->children->last();
    } else {
      $post = $page;
    }
?>

<div class="image-container" data-stellar-offset-parent="40px">

<?php foreach($post->images() as $img): ?>
  <?php
    $w = $img->width();
    $h = $img->height();
    $class = "post-image";
    if ($h > $w) {
      $class = "post-image-tall";
    }
  ?>
  <!-- <div class="full-image"> -->
    <img
      src="<?php echo $img->url() ?>"
      alt="<?php echo $img->name() ?>"
      class="<?php echo $class ?>"
      data-stellar-ratio=".5"
    />
  <!-- </div> -->
<?php endforeach ?>


</div>
