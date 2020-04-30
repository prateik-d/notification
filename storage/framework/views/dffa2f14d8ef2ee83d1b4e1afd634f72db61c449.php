<div class="card">
  <?php if($post->hasThumbnail()): ?>
    <a href="<?php echo e(route('posts.show', $post)); ?>">
      <?php echo e(Html::image($post->thumbnail->getUrl('thumb'), $post->thumbnail->name, ['class' => 'card-img-top'])); ?>

    </a>
  <?php endif; ?>

  <div class="card-body">
    <h4 v-pre class="card-title"><?php echo e(link_to_route('posts.show', $post->title, $post)); ?></h4>

    <p class="card-text"><small v-pre class="text-muted"><?php echo e(link_to_route('users.show', $post->author->fullname, $post->author)); ?></small></p>

    <p class="card-text">
      <small class="text-muted"><?php echo e(humanize_date($post->posted_at)); ?></small><br>
      <small class="text-muted">
        <i class="fa fa-comments-o" aria-hidden="true"></i> <?php echo e($post->comments_count); ?>

        <like
          :likes-count="<?php echo e($post->likes_count); ?>"
          :liked="<?php echo e(json_encode($post->isLiked())); ?>"
          :item-id="<?php echo e($post->id); ?>"
          item-type="posts"
          :logged-in="<?php echo e(json_encode(Auth::check())); ?>"
        />
      </small>
    </p>
  </div>
</div>
<?php /**PATH /var/www/html/notification/resources/views/posts/_show.blade.php ENDPATH**/ ?>