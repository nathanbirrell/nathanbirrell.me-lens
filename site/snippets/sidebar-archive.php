<nav class="menu">
  <ul class="clearfix">
    <?php foreach($pages->visible() AS $topLevelPage): ?>
      <li>
        <h3><?php echo html($topLevelPage->title()) ?></h3>
      </li>
       <ul>
        <?php foreach($topLevelPage->children()->flip()->visible() as $post): ?>
        <li>
          <a href="<?php echo $post->url() ?>">
            <?php echo html($post->title()) ?>
          </a>
        </li>
        <?php endforeach ?>
       </ul>
    <?php endforeach ?>
  </ul>
</nav>